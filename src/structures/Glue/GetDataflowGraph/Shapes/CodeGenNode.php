<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataflowGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $NodeType
 * @property list<CodeGenNodeArg> $Args
 * @property int|null $LineNumber
 */
class CodeGenNode extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     NodeType: string,
     *     Args: list<CodeGenNodeArg>,
     *     LineNumber?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
