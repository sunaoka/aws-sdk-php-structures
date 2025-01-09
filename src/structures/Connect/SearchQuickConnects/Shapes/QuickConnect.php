<?php

namespace Sunaoka\Aws\Structures\Connect\SearchQuickConnects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QuickConnectARN
 * @property string $QuickConnectId
 * @property string $Name
 * @property string $Description
 * @property QuickConnectConfig $QuickConnectConfig
 * @property array<string, string> $Tags
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LastModifiedRegion
 */
class QuickConnect extends Shape
{
    /**
     * @param array{
     *     QuickConnectARN?: string,
     *     QuickConnectId?: string,
     *     Name?: string,
     *     Description?: string,
     *     QuickConnectConfig?: QuickConnectConfig,
     *     Tags?: array<string, string>,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
