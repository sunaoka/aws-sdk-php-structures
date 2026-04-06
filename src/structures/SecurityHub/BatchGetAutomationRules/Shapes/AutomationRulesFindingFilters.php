<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchGetAutomationRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter>|null $ProductArn
 * @property list<StringFilter>|null $AwsAccountId
 * @property list<StringFilter>|null $Id
 * @property list<StringFilter>|null $GeneratorId
 * @property list<StringFilter>|null $Type
 * @property list<DateFilter>|null $FirstObservedAt
 * @property list<DateFilter>|null $LastObservedAt
 * @property list<DateFilter>|null $CreatedAt
 * @property list<DateFilter>|null $UpdatedAt
 * @property list<NumberFilter>|null $Confidence
 * @property list<NumberFilter>|null $Criticality
 * @property list<StringFilter>|null $Title
 * @property list<StringFilter>|null $Description
 * @property list<StringFilter>|null $SourceUrl
 * @property list<StringFilter>|null $ProductName
 * @property list<StringFilter>|null $CompanyName
 * @property list<StringFilter>|null $SeverityLabel
 * @property list<StringFilter>|null $ResourceType
 * @property list<StringFilter>|null $ResourceId
 * @property list<StringFilter>|null $ResourcePartition
 * @property list<StringFilter>|null $ResourceRegion
 * @property list<MapFilter>|null $ResourceTags
 * @property list<MapFilter>|null $ResourceDetailsOther
 * @property list<StringFilter>|null $ComplianceStatus
 * @property list<StringFilter>|null $ComplianceSecurityControlId
 * @property list<StringFilter>|null $ComplianceAssociatedStandardsId
 * @property list<StringFilter>|null $VerificationState
 * @property list<StringFilter>|null $WorkflowStatus
 * @property list<StringFilter>|null $RecordState
 * @property list<StringFilter>|null $RelatedFindingsProductArn
 * @property list<StringFilter>|null $RelatedFindingsId
 * @property list<StringFilter>|null $NoteText
 * @property list<DateFilter>|null $NoteUpdatedAt
 * @property list<StringFilter>|null $NoteUpdatedBy
 * @property list<MapFilter>|null $UserDefinedFields
 * @property list<StringFilter>|null $ResourceApplicationArn
 * @property list<StringFilter>|null $ResourceApplicationName
 * @property list<StringFilter>|null $AwsAccountName
 */
class AutomationRulesFindingFilters extends Shape
{
    /**
     * @param array{
     *     ProductArn?: list<StringFilter>|null,
     *     AwsAccountId?: list<StringFilter>|null,
     *     Id?: list<StringFilter>|null,
     *     GeneratorId?: list<StringFilter>|null,
     *     Type?: list<StringFilter>|null,
     *     FirstObservedAt?: list<DateFilter>|null,
     *     LastObservedAt?: list<DateFilter>|null,
     *     CreatedAt?: list<DateFilter>|null,
     *     UpdatedAt?: list<DateFilter>|null,
     *     Confidence?: list<NumberFilter>|null,
     *     Criticality?: list<NumberFilter>|null,
     *     Title?: list<StringFilter>|null,
     *     Description?: list<StringFilter>|null,
     *     SourceUrl?: list<StringFilter>|null,
     *     ProductName?: list<StringFilter>|null,
     *     CompanyName?: list<StringFilter>|null,
     *     SeverityLabel?: list<StringFilter>|null,
     *     ResourceType?: list<StringFilter>|null,
     *     ResourceId?: list<StringFilter>|null,
     *     ResourcePartition?: list<StringFilter>|null,
     *     ResourceRegion?: list<StringFilter>|null,
     *     ResourceTags?: list<MapFilter>|null,
     *     ResourceDetailsOther?: list<MapFilter>|null,
     *     ComplianceStatus?: list<StringFilter>|null,
     *     ComplianceSecurityControlId?: list<StringFilter>|null,
     *     ComplianceAssociatedStandardsId?: list<StringFilter>|null,
     *     VerificationState?: list<StringFilter>|null,
     *     WorkflowStatus?: list<StringFilter>|null,
     *     RecordState?: list<StringFilter>|null,
     *     RelatedFindingsProductArn?: list<StringFilter>|null,
     *     RelatedFindingsId?: list<StringFilter>|null,
     *     NoteText?: list<StringFilter>|null,
     *     NoteUpdatedAt?: list<DateFilter>|null,
     *     NoteUpdatedBy?: list<StringFilter>|null,
     *     UserDefinedFields?: list<MapFilter>|null,
     *     ResourceApplicationArn?: list<StringFilter>|null,
     *     ResourceApplicationName?: list<StringFilter>|null,
     *     AwsAccountName?: list<StringFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
