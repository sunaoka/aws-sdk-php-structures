<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobLogItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sourceNetworkID
 * @property string|null $sourceVpc
 * @property string|null $targetVpc
 * @property string|null $stackName
 */
class SourceNetworkData extends Shape
{
    /**
     * @param array{
     *     sourceNetworkID?: string|null,
     *     sourceVpc?: string|null,
     *     targetVpc?: string|null,
     *     stackName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
