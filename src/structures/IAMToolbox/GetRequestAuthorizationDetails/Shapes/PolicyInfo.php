<?php

namespace Sunaoka\Aws\Structures\IAMToolbox\GetRequestAuthorizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IDENTITY_BASED_POLICY'|'RESOURCE_BASED_POLICY'|'PERMISSIONS_BOUNDARY'|'SESSION_POLICY'|'SERVICE_CONTROL_POLICY'|'RESOURCE_CONTROL_POLICY'|'VPC_ENDPOINT_POLICY'|null $type
 * @property bool|null $inline
 * @property string|null $uri
 * @property list<AttachedTo>|null $attachedTo
 */
class PolicyInfo extends Shape
{
    /**
     * @param array{
     *     type?: 'IDENTITY_BASED_POLICY'|'RESOURCE_BASED_POLICY'|'PERMISSIONS_BOUNDARY'|'SESSION_POLICY'|'SERVICE_CONTROL_POLICY'|'RESOURCE_CONTROL_POLICY'|'VPC_ENDPOINT_POLICY'|null,
     *     inline?: bool|null,
     *     uri?: string|null,
     *     attachedTo?: list<AttachedTo>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
