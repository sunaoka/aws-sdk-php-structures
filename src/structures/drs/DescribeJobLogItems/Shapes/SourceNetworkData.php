<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobLogItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sourceNetworkID
 * @property string|null $sourceVpc
 * @property string|null $stackName
 * @property string|null $targetVpc
 */
class SourceNetworkData extends Shape
{
    /**
     * @param array{
     *     sourceNetworkID?: string|null,
     *     sourceVpc?: string|null,
     *     stackName?: string|null,
     *     targetVpc?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
