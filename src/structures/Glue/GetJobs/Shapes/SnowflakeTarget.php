<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property SnowflakeNodeData $Data
 * @property list<string> $Inputs
 */
class SnowflakeTarget extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Data: SnowflakeNodeData,
     *     Inputs?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
