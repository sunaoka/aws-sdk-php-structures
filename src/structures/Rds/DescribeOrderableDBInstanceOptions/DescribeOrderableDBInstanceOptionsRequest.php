<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeOrderableDBInstanceOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Engine
 * @property string|null $EngineVersion
 * @property string|null $DBInstanceClass
 * @property string|null $LicenseModel
 * @property string|null $AvailabilityZoneGroup
 * @property bool|null $Vpc
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeOrderableDBInstanceOptionsRequest extends Request
{
    /**
     * @param array{
     *     Engine: string,
     *     EngineVersion?: string|null,
     *     DBInstanceClass?: string|null,
     *     LicenseModel?: string|null,
     *     AvailabilityZoneGroup?: string|null,
     *     Vpc?: bool|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
