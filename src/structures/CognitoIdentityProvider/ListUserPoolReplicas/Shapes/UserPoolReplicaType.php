<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUserPoolReplicas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RegionName
 * @property 'CREATING'|'ACTIVE'|'INACTIVE'|'DELETING'|null $Status
 * @property 'PRIMARY'|'SECONDARY'|null $Role
 * @property string|null $UserPoolArn
 */
class UserPoolReplicaType extends Shape
{
    /**
     * @param array{
     *     RegionName?: string|null,
     *     Status?: 'CREATING'|'ACTIVE'|'INACTIVE'|'DELETING'|null,
     *     Role?: 'PRIMARY'|'SECONDARY'|null,
     *     UserPoolArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
