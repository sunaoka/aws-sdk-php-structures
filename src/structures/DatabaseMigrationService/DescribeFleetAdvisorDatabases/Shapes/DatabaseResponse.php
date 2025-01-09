<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseId
 * @property string $DatabaseName
 * @property string $IpAddress
 * @property int $NumberOfSchemas
 * @property ServerShortInfoResponse $Server
 * @property DatabaseInstanceSoftwareDetailsResponse $SoftwareDetails
 * @property list<CollectorShortInfoResponse> $Collectors
 */
class DatabaseResponse extends Shape
{
    /**
     * @param array{
     *     DatabaseId?: string,
     *     DatabaseName?: string,
     *     IpAddress?: string,
     *     NumberOfSchemas?: int,
     *     Server?: ServerShortInfoResponse,
     *     SoftwareDetails?: DatabaseInstanceSoftwareDetailsResponse,
     *     Collectors?: list<CollectorShortInfoResponse>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
