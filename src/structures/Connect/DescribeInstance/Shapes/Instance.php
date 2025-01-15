<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property 'SAML'|'CONNECT_MANAGED'|'EXISTING_DIRECTORY'|null $IdentityManagementType
 * @property string|null $InstanceAlias
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $ServiceRole
 * @property 'CREATION_IN_PROGRESS'|'ACTIVE'|'CREATION_FAILED'|null $InstanceStatus
 * @property InstanceStatusReason|null $StatusReason
 * @property bool|null $InboundCallsEnabled
 * @property bool|null $OutboundCallsEnabled
 * @property string|null $InstanceAccessUrl
 * @property array<string, string>|null $Tags
 */
class Instance extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     IdentityManagementType?: 'SAML'|'CONNECT_MANAGED'|'EXISTING_DIRECTORY'|null,
     *     InstanceAlias?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     ServiceRole?: string|null,
     *     InstanceStatus?: 'CREATION_IN_PROGRESS'|'ACTIVE'|'CREATION_FAILED'|null,
     *     StatusReason?: InstanceStatusReason|null,
     *     InboundCallsEnabled?: bool|null,
     *     OutboundCallsEnabled?: bool|null,
     *     InstanceAccessUrl?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
