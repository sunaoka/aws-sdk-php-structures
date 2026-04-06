<?php

namespace Sunaoka\Aws\Structures\WorkLink\ListFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FleetArn
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $FleetName
 * @property string|null $DisplayName
 * @property string|null $CompanyCode
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'FAILED_TO_CREATE'|'FAILED_TO_DELETE'|null $FleetStatus
 * @property array<string, string>|null $Tags
 */
class FleetSummary extends Shape
{
    /**
     * @param array{
     *     FleetArn?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     FleetName?: string|null,
     *     DisplayName?: string|null,
     *     CompanyCode?: string|null,
     *     FleetStatus?: 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'FAILED_TO_CREATE'|'FAILED_TO_DELETE'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
