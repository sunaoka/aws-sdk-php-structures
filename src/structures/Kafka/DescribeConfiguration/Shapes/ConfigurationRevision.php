<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $Description
 * @property int $Revision
 */
class ConfigurationRevision extends Shape
{
    /**
     * @param array{
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     Revision: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
