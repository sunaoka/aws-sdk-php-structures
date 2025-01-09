<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAccessPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property Identity $identity
 * @property Resource $resource
 * @property 'ADMINISTRATOR'|'VIEWER' $permission
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastUpdateDate
 */
class AccessPolicySummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     identity: Identity,
     *     resource: Resource,
     *     permission: 'ADMINISTRATOR'|'VIEWER',
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     lastUpdateDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
