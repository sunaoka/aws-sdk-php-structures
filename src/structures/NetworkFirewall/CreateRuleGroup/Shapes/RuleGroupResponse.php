<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleGroupArn
 * @property string $RuleGroupName
 * @property string $RuleGroupId
 * @property string|null $Description
 * @property 'STATELESS'|'STATEFUL'|null $Type
 * @property int|null $Capacity
 * @property 'ACTIVE'|'DELETING'|'ERROR'|null $RuleGroupStatus
 * @property list<Tag>|null $Tags
 * @property int|null $ConsumedCapacity
 * @property int|null $NumberOfAssociations
 * @property EncryptionConfiguration|null $EncryptionConfiguration
 * @property SourceMetadata|null $SourceMetadata
 * @property string|null $SnsTopic
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property list<AnalysisResult>|null $AnalysisResults
 */
class RuleGroupResponse extends Shape
{
    /**
     * @param array{
     *     RuleGroupArn: string,
     *     RuleGroupName: string,
     *     RuleGroupId: string,
     *     Description?: string|null,
     *     Type?: 'STATELESS'|'STATEFUL'|null,
     *     Capacity?: int|null,
     *     RuleGroupStatus?: 'ACTIVE'|'DELETING'|'ERROR'|null,
     *     Tags?: list<Tag>|null,
     *     ConsumedCapacity?: int|null,
     *     NumberOfAssociations?: int|null,
     *     EncryptionConfiguration?: EncryptionConfiguration|null,
     *     SourceMetadata?: SourceMetadata|null,
     *     SnsTopic?: string|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     AnalysisResults?: list<AnalysisResult>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
