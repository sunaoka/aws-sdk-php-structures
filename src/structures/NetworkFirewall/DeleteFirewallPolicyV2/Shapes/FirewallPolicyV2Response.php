<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteFirewallPolicyV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FirewallPolicyV2Name
 * @property string $FirewallPolicyV2Arn
 * @property string $FirewallPolicyV2Id
 * @property string|null $Description
 * @property 'ACTIVE'|'DELETING'|'ERROR'|'UPDATING'|null $FirewallPolicyV2Status
 * @property string|null $StatusMessage
 * @property list<Tag>|null $Tags
 * @property int|null $ConsumedFirewallRuleCapacity
 * @property int|null $ConsumedIpsRuleCapacity
 * @property int|null $ConsumedIpsDomainCapacity
 * @property int|null $NumberOfAssociations
 * @property EncryptionConfiguration|null $EncryptionConfiguration
 * @property list<FirewallPolicyError>|null $Errors
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class FirewallPolicyV2Response extends Shape
{
    /**
     * @param array{
     *     FirewallPolicyV2Name: string,
     *     FirewallPolicyV2Arn: string,
     *     FirewallPolicyV2Id: string,
     *     Description?: string|null,
     *     FirewallPolicyV2Status?: 'ACTIVE'|'DELETING'|'ERROR'|'UPDATING'|null,
     *     StatusMessage?: string|null,
     *     Tags?: list<Tag>|null,
     *     ConsumedFirewallRuleCapacity?: int|null,
     *     ConsumedIpsRuleCapacity?: int|null,
     *     ConsumedIpsDomainCapacity?: int|null,
     *     NumberOfAssociations?: int|null,
     *     EncryptionConfiguration?: EncryptionConfiguration|null,
     *     Errors?: list<FirewallPolicyError>|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
