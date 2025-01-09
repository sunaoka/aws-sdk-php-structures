<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEngineVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Version
 * @property string $Lifecycle
 * @property 'beta'|'prod' $ReleaseStatus
 * @property \Aws\Api\DateTimeResult $LaunchDate
 * @property \Aws\Api\DateTimeResult $AutoUpgradeDate
 * @property \Aws\Api\DateTimeResult $DeprecationDate
 * @property \Aws\Api\DateTimeResult $ForceUpgradeDate
 * @property list<string> $AvailableUpgrades
 */
class EngineVersion extends Shape
{
    /**
     * @param array{
     *     Version?: string,
     *     Lifecycle?: string,
     *     ReleaseStatus?: 'beta'|'prod',
     *     LaunchDate?: \Aws\Api\DateTimeResult,
     *     AutoUpgradeDate?: \Aws\Api\DateTimeResult,
     *     DeprecationDate?: \Aws\Api\DateTimeResult,
     *     ForceUpgradeDate?: \Aws\Api\DateTimeResult,
     *     AvailableUpgrades?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
