<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeOpsItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Status'|'CreatedBy'|'Source'|'Priority'|'Title'|'OpsItemId'|'CreatedTime'|'LastModifiedTime'|'ActualStartTime'|'ActualEndTime'|'PlannedStartTime'|'PlannedEndTime'|'OperationalData'|'OperationalDataKey'|'OperationalDataValue'|'ResourceId'|'AutomationId'|'Category'|'Severity'|'OpsItemType'|'AccessRequestByRequesterArn'|'AccessRequestByRequesterId'|'AccessRequestByApproverArn'|'AccessRequestByApproverId'|'AccessRequestBySourceAccountId'|'AccessRequestBySourceOpsItemId'|'AccessRequestBySourceRegion'|'AccessRequestByIsReplica'|'AccessRequestByTargetResourceId'|'ChangeRequestByRequesterArn'|'ChangeRequestByRequesterName'|'ChangeRequestByApproverArn'|'ChangeRequestByApproverName'|'ChangeRequestByTemplate'|'ChangeRequestByTargetsResourceGroup'|'InsightByType'|'AccountId' $Key
 * @property list<string> $Values
 * @property 'Equal'|'Contains'|'GreaterThan'|'LessThan' $Operator
 */
class OpsItemFilter extends Shape
{
    /**
     * @param array{
     *     Key: 'Status'|'CreatedBy'|'Source'|'Priority'|'Title'|'OpsItemId'|'CreatedTime'|'LastModifiedTime'|'ActualStartTime'|'ActualEndTime'|'PlannedStartTime'|'PlannedEndTime'|'OperationalData'|'OperationalDataKey'|'OperationalDataValue'|'ResourceId'|'AutomationId'|'Category'|'Severity'|'OpsItemType'|'AccessRequestByRequesterArn'|'AccessRequestByRequesterId'|'AccessRequestByApproverArn'|'AccessRequestByApproverId'|'AccessRequestBySourceAccountId'|'AccessRequestBySourceOpsItemId'|'AccessRequestBySourceRegion'|'AccessRequestByIsReplica'|'AccessRequestByTargetResourceId'|'ChangeRequestByRequesterArn'|'ChangeRequestByRequesterName'|'ChangeRequestByApproverArn'|'ChangeRequestByApproverName'|'ChangeRequestByTemplate'|'ChangeRequestByTargetsResourceGroup'|'InsightByType'|'AccountId',
     *     Values: list<string>,
     *     Operator: 'Equal'|'Contains'|'GreaterThan'|'LessThan'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
