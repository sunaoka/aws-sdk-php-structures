<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeQuickConnect\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QuickConnectARN
 * @property string|null $QuickConnectId
 * @property string|null $Name
 * @property string|null $Description
 * @property QuickConnectConfig|null $QuickConnectConfig
 * @property array<string, string>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 */
class QuickConnect extends Shape
{
    /**
     * @param array{
     *     QuickConnectARN?: string|null,
     *     QuickConnectId?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     QuickConnectConfig?: QuickConnectConfig|null,
     *     Tags?: array<string, string>|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
