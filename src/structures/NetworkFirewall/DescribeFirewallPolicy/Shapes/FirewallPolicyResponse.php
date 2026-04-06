<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FirewallPolicyName
 * @property string $FirewallPolicyArn
 * @property string $FirewallPolicyId
 * @property string|null $Description
 * @property 'ACTIVE'|'DELETING'|'ERROR'|null $FirewallPolicyStatus
 * @property list<Tag>|null $Tags
 * @property int|null $ConsumedStatelessRuleCapacity
 * @property int|null $ConsumedStatefulRuleCapacity
 * @property int|null $NumberOfAssociations
 * @property EncryptionConfiguration|null $EncryptionConfiguration
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class FirewallPolicyResponse extends Shape
{
    /**
     * @param array{
     *     FirewallPolicyName: string,
     *     FirewallPolicyArn: string,
     *     FirewallPolicyId: string,
     *     Description?: string|null,
     *     FirewallPolicyStatus?: 'ACTIVE'|'DELETING'|'ERROR'|null,
     *     Tags?: list<Tag>|null,
     *     ConsumedStatelessRuleCapacity?: int|null,
     *     ConsumedStatefulRuleCapacity?: int|null,
     *     NumberOfAssociations?: int|null,
     *     EncryptionConfiguration?: EncryptionConfiguration|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
