<?php

namespace Sunaoka\Aws\Structures\Evs\UpdateEnvironmentConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $environmentId
 * @property string|null $connectorId
 * @property 'VCENTER'|null $type
 * @property string|null $applianceFqdn
 * @property string|null $secretArn
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETED'|null $state
 * @property string|null $stateDetails
 * @property 'PASSED'|'FAILED'|'UNKNOWN'|null $status
 * @property list<ConnectorCheck>|null $checks
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 */
class Connector extends Shape
{
    /**
     * @param array{
     *     environmentId?: string|null,
     *     connectorId?: string|null,
     *     type?: 'VCENTER'|null,
     *     applianceFqdn?: string|null,
     *     secretArn?: string|null,
     *     state?: 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETED'|null,
     *     stateDetails?: string|null,
     *     status?: 'PASSED'|'FAILED'|'UNKNOWN'|null,
     *     checks?: list<ConnectorCheck>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     modifiedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
