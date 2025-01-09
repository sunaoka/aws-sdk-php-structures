<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateAutomationRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter> $ProductArn
 * @property list<StringFilter> $AwsAccountId
 * @property list<StringFilter> $Id
 * @property list<StringFilter> $GeneratorId
 * @property list<StringFilter> $Type
 * @property list<DateFilter> $FirstObservedAt
 * @property list<DateFilter> $LastObservedAt
 * @property list<DateFilter> $CreatedAt
 * @property list<DateFilter> $UpdatedAt
 * @property list<NumberFilter> $Confidence
 * @property list<NumberFilter> $Criticality
 * @property list<StringFilter> $Title
 * @property list<StringFilter> $Description
 * @property list<StringFilter> $SourceUrl
 * @property list<StringFilter> $ProductName
 * @property list<StringFilter> $CompanyName
 * @property list<StringFilter> $SeverityLabel
 * @property list<StringFilter> $ResourceType
 * @property list<StringFilter> $ResourceId
 * @property list<StringFilter> $ResourcePartition
 * @property list<StringFilter> $ResourceRegion
 * @property list<MapFilter> $ResourceTags
 * @property list<MapFilter> $ResourceDetailsOther
 * @property list<StringFilter> $ComplianceStatus
 * @property list<StringFilter> $ComplianceSecurityControlId
 * @property list<StringFilter> $ComplianceAssociatedStandardsId
 * @property list<StringFilter> $VerificationState
 * @property list<StringFilter> $WorkflowStatus
 * @property list<StringFilter> $RecordState
 * @property list<StringFilter> $RelatedFindingsProductArn
 * @property list<StringFilter> $RelatedFindingsId
 * @property list<StringFilter> $NoteText
 * @property list<DateFilter> $NoteUpdatedAt
 * @property list<StringFilter> $NoteUpdatedBy
 * @property list<MapFilter> $UserDefinedFields
 * @property list<StringFilter> $ResourceApplicationArn
 * @property list<StringFilter> $ResourceApplicationName
 * @property list<StringFilter> $AwsAccountName
 */
class AutomationRulesFindingFilters extends Shape
{
    /**
     * @param array{
     *     ProductArn?: list<StringFilter>,
     *     AwsAccountId?: list<StringFilter>,
     *     Id?: list<StringFilter>,
     *     GeneratorId?: list<StringFilter>,
     *     Type?: list<StringFilter>,
     *     FirstObservedAt?: list<DateFilter>,
     *     LastObservedAt?: list<DateFilter>,
     *     CreatedAt?: list<DateFilter>,
     *     UpdatedAt?: list<DateFilter>,
     *     Confidence?: list<NumberFilter>,
     *     Criticality?: list<NumberFilter>,
     *     Title?: list<StringFilter>,
     *     Description?: list<StringFilter>,
     *     SourceUrl?: list<StringFilter>,
     *     ProductName?: list<StringFilter>,
     *     CompanyName?: list<StringFilter>,
     *     SeverityLabel?: list<StringFilter>,
     *     ResourceType?: list<StringFilter>,
     *     ResourceId?: list<StringFilter>,
     *     ResourcePartition?: list<StringFilter>,
     *     ResourceRegion?: list<StringFilter>,
     *     ResourceTags?: list<MapFilter>,
     *     ResourceDetailsOther?: list<MapFilter>,
     *     ComplianceStatus?: list<StringFilter>,
     *     ComplianceSecurityControlId?: list<StringFilter>,
     *     ComplianceAssociatedStandardsId?: list<StringFilter>,
     *     VerificationState?: list<StringFilter>,
     *     WorkflowStatus?: list<StringFilter>,
     *     RecordState?: list<StringFilter>,
     *     RelatedFindingsProductArn?: list<StringFilter>,
     *     RelatedFindingsId?: list<StringFilter>,
     *     NoteText?: list<StringFilter>,
     *     NoteUpdatedAt?: list<DateFilter>,
     *     NoteUpdatedBy?: list<StringFilter>,
     *     UserDefinedFields?: list<MapFilter>,
     *     ResourceApplicationArn?: list<StringFilter>,
     *     ResourceApplicationName?: list<StringFilter>,
     *     AwsAccountName?: list<StringFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
