<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property SnowflakeNodeData $Data
 * @property list<string>|null $Inputs
 */
class SnowflakeTarget extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Data: SnowflakeNodeData,
     *     Inputs?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
