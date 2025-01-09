<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobLogItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceNetworkID
 * @property string $sourceVpc
 * @property string $stackName
 * @property string $targetVpc
 */
class SourceNetworkData extends Shape
{
    /**
     * @param array{
     *     sourceNetworkID?: string,
     *     sourceVpc?: string,
     *     stackName?: string,
     *     targetVpc?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
