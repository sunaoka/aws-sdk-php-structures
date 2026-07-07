<?php

namespace Sunaoka\Aws\Structures\Ssm\ValidateCloudConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INFO'|'WARN'|'ERROR'|null $Type
 * @property 'TargetInaccessible'|'TargetUnusable'|'TargetStateWarning'|'AwsRoleAssumptionFailed'|'WebIdentityTokenFailed'|'OutboundWebIdentityFederationDisabled'|'ProviderCredentialCreationFailed'|'TenantSummary'|'SubscriptionAccessible'|null $Code
 * @property string|null $Message
 * @property string|null $ProviderMessage
 * @property ValidationFindingScope|null $Scope
 */
class ValidationFinding extends Shape
{
    /**
     * @param array{
     *     Type?: 'INFO'|'WARN'|'ERROR'|null,
     *     Code?: 'TargetInaccessible'|'TargetUnusable'|'TargetStateWarning'|'AwsRoleAssumptionFailed'|'WebIdentityTokenFailed'|'OutboundWebIdentityFederationDisabled'|'ProviderCredentialCreationFailed'|'TenantSummary'|'SubscriptionAccessible'|null,
     *     Message?: string|null,
     *     ProviderMessage?: string|null,
     *     Scope?: ValidationFindingScope|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
