<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEngineVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Version
 * @property string|null $Lifecycle
 * @property 'beta'|'prod'|null $ReleaseStatus
 * @property \Aws\Api\DateTimeResult|null $LaunchDate
 * @property \Aws\Api\DateTimeResult|null $AutoUpgradeDate
 * @property \Aws\Api\DateTimeResult|null $DeprecationDate
 * @property \Aws\Api\DateTimeResult|null $ForceUpgradeDate
 * @property list<string>|null $AvailableUpgrades
 */
class EngineVersion extends Shape
{
    /**
     * @param array{
     *     Version?: string|null,
     *     Lifecycle?: string|null,
     *     ReleaseStatus?: 'beta'|'prod'|null,
     *     LaunchDate?: \Aws\Api\DateTimeResult|null,
     *     AutoUpgradeDate?: \Aws\Api\DateTimeResult|null,
     *     DeprecationDate?: \Aws\Api\DateTimeResult|null,
     *     ForceUpgradeDate?: \Aws\Api\DateTimeResult|null,
     *     AvailableUpgrades?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
