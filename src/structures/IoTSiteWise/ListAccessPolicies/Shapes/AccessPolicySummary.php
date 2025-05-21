<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAccessPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property Identity $identity
 * @property ResourceShape $resource
 * @property 'ADMINISTRATOR'|'VIEWER' $permission
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property \Aws\Api\DateTimeResult|null $lastUpdateDate
 */
class AccessPolicySummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     identity: Identity,
     *     resource: ResourceShape,
     *     permission: 'ADMINISTRATOR'|'VIEWER',
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     lastUpdateDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
