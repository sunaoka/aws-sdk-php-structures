<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleGroupArn
 * @property string $RuleGroupName
 * @property string $RuleGroupId
 * @property string $Description
 * @property 'STATELESS'|'STATEFUL' $Type
 * @property int $Capacity
 * @property 'ACTIVE'|'DELETING'|'ERROR' $RuleGroupStatus
 * @property list<Tag> $Tags
 * @property int $ConsumedCapacity
 * @property int $NumberOfAssociations
 * @property EncryptionConfiguration $EncryptionConfiguration
 * @property SourceMetadata $SourceMetadata
 * @property string $SnsTopic
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property list<AnalysisResult> $AnalysisResults
 */
class RuleGroupResponse extends Shape
{
    /**
     * @param array{
     *     RuleGroupArn: string,
     *     RuleGroupName: string,
     *     RuleGroupId: string,
     *     Description?: string,
     *     Type?: 'STATELESS'|'STATEFUL',
     *     Capacity?: int,
     *     RuleGroupStatus?: 'ACTIVE'|'DELETING'|'ERROR',
     *     Tags?: list<Tag>,
     *     ConsumedCapacity?: int,
     *     NumberOfAssociations?: int,
     *     EncryptionConfiguration?: EncryptionConfiguration,
     *     SourceMetadata?: SourceMetadata,
     *     SnsTopic?: string,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     AnalysisResults?: list<AnalysisResult>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
