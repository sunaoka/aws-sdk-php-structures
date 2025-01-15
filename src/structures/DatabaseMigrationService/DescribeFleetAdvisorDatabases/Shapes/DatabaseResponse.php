<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DatabaseId
 * @property string|null $DatabaseName
 * @property string|null $IpAddress
 * @property int|null $NumberOfSchemas
 * @property ServerShortInfoResponse|null $Server
 * @property DatabaseInstanceSoftwareDetailsResponse|null $SoftwareDetails
 * @property list<CollectorShortInfoResponse>|null $Collectors
 */
class DatabaseResponse extends Shape
{
    /**
     * @param array{
     *     DatabaseId?: string|null,
     *     DatabaseName?: string|null,
     *     IpAddress?: string|null,
     *     NumberOfSchemas?: int|null,
     *     Server?: ServerShortInfoResponse|null,
     *     SoftwareDetails?: DatabaseInstanceSoftwareDetailsResponse|null,
     *     Collectors?: list<CollectorShortInfoResponse>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
