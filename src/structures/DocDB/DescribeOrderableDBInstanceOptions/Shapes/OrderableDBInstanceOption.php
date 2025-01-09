<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeOrderableDBInstanceOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $DBInstanceClass
 * @property string $LicenseModel
 * @property list<AvailabilityZone> $AvailabilityZones
 * @property bool $Vpc
 * @property string $StorageType
 */
class OrderableDBInstanceOption extends Shape
{
    /**
     * @param array{
     *     Engine?: string,
     *     EngineVersion?: string,
     *     DBInstanceClass?: string,
     *     LicenseModel?: string,
     *     AvailabilityZones?: list<AvailabilityZone>,
     *     Vpc?: bool,
     *     StorageType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
