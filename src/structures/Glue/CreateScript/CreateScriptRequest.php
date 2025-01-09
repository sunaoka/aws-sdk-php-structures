<?php

namespace Sunaoka\Aws\Structures\Glue\CreateScript;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\CodeGenNode> $DagNodes
 * @property list<Shapes\CodeGenEdge> $DagEdges
 * @property 'PYTHON'|'SCALA' $Language
 */
class CreateScriptRequest extends Request
{
    /**
     * @param array{
     *     DagNodes?: list<Shapes\CodeGenNode>,
     *     DagEdges?: list<Shapes\CodeGenEdge>,
     *     Language?: 'PYTHON'|'SCALA'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
