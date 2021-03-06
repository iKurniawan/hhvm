<?php
// Copyright 2004-present Facebook. All Rights Reserved.
// This file is @generated by
// fbcode/hphp/facebook/tools/code_model/Generate.sh

namespace HH\CodeModel {

/**
 * $variableName
 * ${variableExpression}
 */
class SimpleVariableExpression /*implements ISimpleVariableExpression*/ {
  use Expression;
  use TypedNode;
  use Node;

  private /*?string*/ $variableName;
  private /*?IExpression*/ $variableExpression;

  /**
   * $variableName
   * ${variableExpression}
   */
  public function getVariableName() /*: ?string*/ {
    return $this->variableName;
  }
  /**
   * $variableName
   * ${variableExpression}
   */
  public function setVariableName(/*?string*/ $value) /*: this*/ {
    $this->variableName = $value;
    return $this;
  }

  /**
   * $variableName
   * ${variableExpression}
   */
  public function getVariableExpression() /*: ?IExpression*/ {
    return $this->variableExpression;
  }
  /**
   * $variableName
   * ${variableExpression}
   */
  public function setVariableExpression(/*?IExpression*/ $value) /*: this*/ {
    $this->variableExpression = $value;
    return $this;
  }

  /**
   * Returns $visitor->visitSimpleVariableExpression($this) if
   * such a method exists on $visitor.
   * Otherwise returns $visitor->visitExpression($this) if
   * such a method exists on $visitor.
   * Otherwise returns $visitor->visitNode($this) if
   */
  public function accept(/*mixed*/ $visitor) /*: mixed*/ {
    if (method_exists($visitor, "visitSimpleVariableExpression")) {
      // UNSAFE
      return $visitor->visitSimpleVariableExpression($this);
    } else if (method_exists($visitor, "visitExpression")) {
      // UNSAFE
      return $visitor->visitExpression($this);
    } else {
      return $visitor->visitNode($this);
    }
  }

  /**
   * Yields a list of nodes that are children of this node.
   * A node has exactly one parent, so doing a depth
   * first traversal of a node graph using getChildren will
   * traverse a spanning tree.
   */
  public function getChildren() /*: Continuation<INode>*/ {
    if ($this->variableExpression !== null) {
      yield $this->variableExpression;
    }
  }
}
}
