<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeOrderableDBInstanceOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $DBInstanceClass
 * @property string $LicenseModel
 * @property string $AvailabilityZoneGroup
 * @property bool $Vpc
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeOrderableDBInstanceOptionsRequest extends Request
{
    /**
     * @param array{
     *     Engine: string,
     *     EngineVersion?: string,
     *     DBInstanceClass?: string,
     *     LicenseModel?: string,
     *     AvailabilityZoneGroup?: string,
     *     Vpc?: bool,
     *     Filters?: list<Shapes\Filter>,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
