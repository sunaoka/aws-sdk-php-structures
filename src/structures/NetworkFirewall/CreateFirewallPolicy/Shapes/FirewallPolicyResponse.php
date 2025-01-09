<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FirewallPolicyName
 * @property string $FirewallPolicyArn
 * @property string $FirewallPolicyId
 * @property string $Description
 * @property 'ACTIVE'|'DELETING'|'ERROR' $FirewallPolicyStatus
 * @property list<Tag> $Tags
 * @property int $ConsumedStatelessRuleCapacity
 * @property int $ConsumedStatefulRuleCapacity
 * @property int $NumberOfAssociations
 * @property EncryptionConfiguration $EncryptionConfiguration
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class FirewallPolicyResponse extends Shape
{
    /**
     * @param array{
     *     FirewallPolicyName: string,
     *     FirewallPolicyArn: string,
     *     FirewallPolicyId: string,
     *     Description?: string,
     *     FirewallPolicyStatus?: 'ACTIVE'|'DELETING'|'ERROR',
     *     Tags?: list<Tag>,
     *     ConsumedStatelessRuleCapacity?: int,
     *     ConsumedStatefulRuleCapacity?: int,
     *     NumberOfAssociations?: int,
     *     EncryptionConfiguration?: EncryptionConfiguration,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
