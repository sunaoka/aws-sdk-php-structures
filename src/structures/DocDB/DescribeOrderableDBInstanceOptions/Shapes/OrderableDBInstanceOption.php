<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeOrderableDBInstanceOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $DBInstanceClass
 * @property string|null $LicenseModel
 * @property list<AvailabilityZone>|null $AvailabilityZones
 * @property bool|null $Vpc
 * @property string|null $StorageType
 */
class OrderableDBInstanceOption extends Shape
{
    /**
     * @param array{
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     DBInstanceClass?: string|null,
     *     LicenseModel?: string|null,
     *     AvailabilityZones?: list<AvailabilityZone>|null,
     *     Vpc?: bool|null,
     *     StorageType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
