<?php

namespace Sunaoka\Aws\Structures\Glue\CreateScript;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\CodeGenNode>|null $DagNodes
 * @property list<Shapes\CodeGenEdge>|null $DagEdges
 * @property 'PYTHON'|'SCALA'|null $Language
 */
class CreateScriptRequest extends Request
{
    /**
     * @param array{
     *     DagNodes?: list<Shapes\CodeGenNode>|null,
     *     DagEdges?: list<Shapes\CodeGenEdge>|null,
     *     Language?: 'PYTHON'|'SCALA'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
