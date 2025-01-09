<?php

namespace Sunaoka\Aws\Structures\Connect\ListInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property 'SAML'|'CONNECT_MANAGED'|'EXISTING_DIRECTORY' $IdentityManagementType
 * @property string $InstanceAlias
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $ServiceRole
 * @property 'CREATION_IN_PROGRESS'|'ACTIVE'|'CREATION_FAILED' $InstanceStatus
 * @property bool $InboundCallsEnabled
 * @property bool $OutboundCallsEnabled
 * @property string $InstanceAccessUrl
 */
class InstanceSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     IdentityManagementType?: 'SAML'|'CONNECT_MANAGED'|'EXISTING_DIRECTORY',
     *     InstanceAlias?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     ServiceRole?: string,
     *     InstanceStatus?: 'CREATION_IN_PROGRESS'|'ACTIVE'|'CREATION_FAILED',
     *     InboundCallsEnabled?: bool,
     *     OutboundCallsEnabled?: bool,
     *     InstanceAccessUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
