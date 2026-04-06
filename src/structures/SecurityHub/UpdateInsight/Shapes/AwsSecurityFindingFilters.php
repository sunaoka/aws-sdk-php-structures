<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter>|null $ProductArn
 * @property list<StringFilter>|null $AwsAccountId
 * @property list<StringFilter>|null $Id
 * @property list<StringFilter>|null $GeneratorId
 * @property list<StringFilter>|null $Region
 * @property list<StringFilter>|null $Type
 * @property list<DateFilter>|null $FirstObservedAt
 * @property list<DateFilter>|null $LastObservedAt
 * @property list<DateFilter>|null $CreatedAt
 * @property list<DateFilter>|null $UpdatedAt
 * @property list<NumberFilter>|null $SeverityProduct
 * @property list<NumberFilter>|null $SeverityNormalized
 * @property list<StringFilter>|null $SeverityLabel
 * @property list<NumberFilter>|null $Confidence
 * @property list<NumberFilter>|null $Criticality
 * @property list<StringFilter>|null $Title
 * @property list<StringFilter>|null $Description
 * @property list<StringFilter>|null $RecommendationText
 * @property list<StringFilter>|null $SourceUrl
 * @property list<MapFilter>|null $ProductFields
 * @property list<StringFilter>|null $ProductName
 * @property list<StringFilter>|null $CompanyName
 * @property list<MapFilter>|null $UserDefinedFields
 * @property list<StringFilter>|null $MalwareName
 * @property list<StringFilter>|null $MalwareType
 * @property list<StringFilter>|null $MalwarePath
 * @property list<StringFilter>|null $MalwareState
 * @property list<StringFilter>|null $NetworkDirection
 * @property list<StringFilter>|null $NetworkProtocol
 * @property list<IpFilter>|null $NetworkSourceIpV4
 * @property list<IpFilter>|null $NetworkSourceIpV6
 * @property list<NumberFilter>|null $NetworkSourcePort
 * @property list<StringFilter>|null $NetworkSourceDomain
 * @property list<StringFilter>|null $NetworkSourceMac
 * @property list<IpFilter>|null $NetworkDestinationIpV4
 * @property list<IpFilter>|null $NetworkDestinationIpV6
 * @property list<NumberFilter>|null $NetworkDestinationPort
 * @property list<StringFilter>|null $NetworkDestinationDomain
 * @property list<StringFilter>|null $ProcessName
 * @property list<StringFilter>|null $ProcessPath
 * @property list<NumberFilter>|null $ProcessPid
 * @property list<NumberFilter>|null $ProcessParentPid
 * @property list<DateFilter>|null $ProcessLaunchedAt
 * @property list<DateFilter>|null $ProcessTerminatedAt
 * @property list<StringFilter>|null $ThreatIntelIndicatorType
 * @property list<StringFilter>|null $ThreatIntelIndicatorValue
 * @property list<StringFilter>|null $ThreatIntelIndicatorCategory
 * @property list<DateFilter>|null $ThreatIntelIndicatorLastObservedAt
 * @property list<StringFilter>|null $ThreatIntelIndicatorSource
 * @property list<StringFilter>|null $ThreatIntelIndicatorSourceUrl
 * @property list<StringFilter>|null $ResourceType
 * @property list<StringFilter>|null $ResourceId
 * @property list<StringFilter>|null $ResourcePartition
 * @property list<StringFilter>|null $ResourceRegion
 * @property list<MapFilter>|null $ResourceTags
 * @property list<StringFilter>|null $ResourceAwsEc2InstanceType
 * @property list<StringFilter>|null $ResourceAwsEc2InstanceImageId
 * @property list<IpFilter>|null $ResourceAwsEc2InstanceIpV4Addresses
 * @property list<IpFilter>|null $ResourceAwsEc2InstanceIpV6Addresses
 * @property list<StringFilter>|null $ResourceAwsEc2InstanceKeyName
 * @property list<StringFilter>|null $ResourceAwsEc2InstanceIamInstanceProfileArn
 * @property list<StringFilter>|null $ResourceAwsEc2InstanceVpcId
 * @property list<StringFilter>|null $ResourceAwsEc2InstanceSubnetId
 * @property list<DateFilter>|null $ResourceAwsEc2InstanceLaunchedAt
 * @property list<StringFilter>|null $ResourceAwsS3BucketOwnerId
 * @property list<StringFilter>|null $ResourceAwsS3BucketOwnerName
 * @property list<StringFilter>|null $ResourceAwsIamAccessKeyUserName
 * @property list<StringFilter>|null $ResourceAwsIamAccessKeyPrincipalName
 * @property list<StringFilter>|null $ResourceAwsIamAccessKeyStatus
 * @property list<DateFilter>|null $ResourceAwsIamAccessKeyCreatedAt
 * @property list<StringFilter>|null $ResourceAwsIamUserUserName
 * @property list<StringFilter>|null $ResourceContainerName
 * @property list<StringFilter>|null $ResourceContainerImageId
 * @property list<StringFilter>|null $ResourceContainerImageName
 * @property list<DateFilter>|null $ResourceContainerLaunchedAt
 * @property list<MapFilter>|null $ResourceDetailsOther
 * @property list<StringFilter>|null $ComplianceStatus
 * @property list<StringFilter>|null $VerificationState
 * @property list<StringFilter>|null $WorkflowState
 * @property list<StringFilter>|null $WorkflowStatus
 * @property list<StringFilter>|null $RecordState
 * @property list<StringFilter>|null $RelatedFindingsProductArn
 * @property list<StringFilter>|null $RelatedFindingsId
 * @property list<StringFilter>|null $NoteText
 * @property list<DateFilter>|null $NoteUpdatedAt
 * @property list<StringFilter>|null $NoteUpdatedBy
 * @property list<KeywordFilter>|null $Keyword
 * @property list<NumberFilter>|null $FindingProviderFieldsConfidence
 * @property list<NumberFilter>|null $FindingProviderFieldsCriticality
 * @property list<StringFilter>|null $FindingProviderFieldsRelatedFindingsId
 * @property list<StringFilter>|null $FindingProviderFieldsRelatedFindingsProductArn
 * @property list<StringFilter>|null $FindingProviderFieldsSeverityLabel
 * @property list<StringFilter>|null $FindingProviderFieldsSeverityOriginal
 * @property list<StringFilter>|null $FindingProviderFieldsTypes
 * @property list<BooleanFilter>|null $Sample
 * @property list<StringFilter>|null $ComplianceSecurityControlId
 * @property list<StringFilter>|null $ComplianceAssociatedStandardsId
 * @property list<StringFilter>|null $VulnerabilitiesExploitAvailable
 * @property list<StringFilter>|null $VulnerabilitiesFixAvailable
 * @property list<StringFilter>|null $ComplianceSecurityControlParametersName
 * @property list<StringFilter>|null $ComplianceSecurityControlParametersValue
 * @property list<StringFilter>|null $AwsAccountName
 * @property list<StringFilter>|null $ResourceApplicationName
 * @property list<StringFilter>|null $ResourceApplicationArn
 */
class AwsSecurityFindingFilters extends Shape
{
    /**
     * @param array{
     *     ProductArn?: list<StringFilter>|null,
     *     AwsAccountId?: list<StringFilter>|null,
     *     Id?: list<StringFilter>|null,
     *     GeneratorId?: list<StringFilter>|null,
     *     Region?: list<StringFilter>|null,
     *     Type?: list<StringFilter>|null,
     *     FirstObservedAt?: list<DateFilter>|null,
     *     LastObservedAt?: list<DateFilter>|null,
     *     CreatedAt?: list<DateFilter>|null,
     *     UpdatedAt?: list<DateFilter>|null,
     *     SeverityProduct?: list<NumberFilter>|null,
     *     SeverityNormalized?: list<NumberFilter>|null,
     *     SeverityLabel?: list<StringFilter>|null,
     *     Confidence?: list<NumberFilter>|null,
     *     Criticality?: list<NumberFilter>|null,
     *     Title?: list<StringFilter>|null,
     *     Description?: list<StringFilter>|null,
     *     RecommendationText?: list<StringFilter>|null,
     *     SourceUrl?: list<StringFilter>|null,
     *     ProductFields?: list<MapFilter>|null,
     *     ProductName?: list<StringFilter>|null,
     *     CompanyName?: list<StringFilter>|null,
     *     UserDefinedFields?: list<MapFilter>|null,
     *     MalwareName?: list<StringFilter>|null,
     *     MalwareType?: list<StringFilter>|null,
     *     MalwarePath?: list<StringFilter>|null,
     *     MalwareState?: list<StringFilter>|null,
     *     NetworkDirection?: list<StringFilter>|null,
     *     NetworkProtocol?: list<StringFilter>|null,
     *     NetworkSourceIpV4?: list<IpFilter>|null,
     *     NetworkSourceIpV6?: list<IpFilter>|null,
     *     NetworkSourcePort?: list<NumberFilter>|null,
     *     NetworkSourceDomain?: list<StringFilter>|null,
     *     NetworkSourceMac?: list<StringFilter>|null,
     *     NetworkDestinationIpV4?: list<IpFilter>|null,
     *     NetworkDestinationIpV6?: list<IpFilter>|null,
     *     NetworkDestinationPort?: list<NumberFilter>|null,
     *     NetworkDestinationDomain?: list<StringFilter>|null,
     *     ProcessName?: list<StringFilter>|null,
     *     ProcessPath?: list<StringFilter>|null,
     *     ProcessPid?: list<NumberFilter>|null,
     *     ProcessParentPid?: list<NumberFilter>|null,
     *     ProcessLaunchedAt?: list<DateFilter>|null,
     *     ProcessTerminatedAt?: list<DateFilter>|null,
     *     ThreatIntelIndicatorType?: list<StringFilter>|null,
     *     ThreatIntelIndicatorValue?: list<StringFilter>|null,
     *     ThreatIntelIndicatorCategory?: list<StringFilter>|null,
     *     ThreatIntelIndicatorLastObservedAt?: list<DateFilter>|null,
     *     ThreatIntelIndicatorSource?: list<StringFilter>|null,
     *     ThreatIntelIndicatorSourceUrl?: list<StringFilter>|null,
     *     ResourceType?: list<StringFilter>|null,
     *     ResourceId?: list<StringFilter>|null,
     *     ResourcePartition?: list<StringFilter>|null,
     *     ResourceRegion?: list<StringFilter>|null,
     *     ResourceTags?: list<MapFilter>|null,
     *     ResourceAwsEc2InstanceType?: list<StringFilter>|null,
     *     ResourceAwsEc2InstanceImageId?: list<StringFilter>|null,
     *     ResourceAwsEc2InstanceIpV4Addresses?: list<IpFilter>|null,
     *     ResourceAwsEc2InstanceIpV6Addresses?: list<IpFilter>|null,
     *     ResourceAwsEc2InstanceKeyName?: list<StringFilter>|null,
     *     ResourceAwsEc2InstanceIamInstanceProfileArn?: list<StringFilter>|null,
     *     ResourceAwsEc2InstanceVpcId?: list<StringFilter>|null,
     *     ResourceAwsEc2InstanceSubnetId?: list<StringFilter>|null,
     *     ResourceAwsEc2InstanceLaunchedAt?: list<DateFilter>|null,
     *     ResourceAwsS3BucketOwnerId?: list<StringFilter>|null,
     *     ResourceAwsS3BucketOwnerName?: list<StringFilter>|null,
     *     ResourceAwsIamAccessKeyUserName?: list<StringFilter>|null,
     *     ResourceAwsIamAccessKeyPrincipalName?: list<StringFilter>|null,
     *     ResourceAwsIamAccessKeyStatus?: list<StringFilter>|null,
     *     ResourceAwsIamAccessKeyCreatedAt?: list<DateFilter>|null,
     *     ResourceAwsIamUserUserName?: list<StringFilter>|null,
     *     ResourceContainerName?: list<StringFilter>|null,
     *     ResourceContainerImageId?: list<StringFilter>|null,
     *     ResourceContainerImageName?: list<StringFilter>|null,
     *     ResourceContainerLaunchedAt?: list<DateFilter>|null,
     *     ResourceDetailsOther?: list<MapFilter>|null,
     *     ComplianceStatus?: list<StringFilter>|null,
     *     VerificationState?: list<StringFilter>|null,
     *     WorkflowState?: list<StringFilter>|null,
     *     WorkflowStatus?: list<StringFilter>|null,
     *     RecordState?: list<StringFilter>|null,
     *     RelatedFindingsProductArn?: list<StringFilter>|null,
     *     RelatedFindingsId?: list<StringFilter>|null,
     *     NoteText?: list<StringFilter>|null,
     *     NoteUpdatedAt?: list<DateFilter>|null,
     *     NoteUpdatedBy?: list<StringFilter>|null,
     *     Keyword?: list<KeywordFilter>|null,
     *     FindingProviderFieldsConfidence?: list<NumberFilter>|null,
     *     FindingProviderFieldsCriticality?: list<NumberFilter>|null,
     *     FindingProviderFieldsRelatedFindingsId?: list<StringFilter>|null,
     *     FindingProviderFieldsRelatedFindingsProductArn?: list<StringFilter>|null,
     *     FindingProviderFieldsSeverityLabel?: list<StringFilter>|null,
     *     FindingProviderFieldsSeverityOriginal?: list<StringFilter>|null,
     *     FindingProviderFieldsTypes?: list<StringFilter>|null,
     *     Sample?: list<BooleanFilter>|null,
     *     ComplianceSecurityControlId?: list<StringFilter>|null,
     *     ComplianceAssociatedStandardsId?: list<StringFilter>|null,
     *     VulnerabilitiesExploitAvailable?: list<StringFilter>|null,
     *     VulnerabilitiesFixAvailable?: list<StringFilter>|null,
     *     ComplianceSecurityControlParametersName?: list<StringFilter>|null,
     *     ComplianceSecurityControlParametersValue?: list<StringFilter>|null,
     *     AwsAccountName?: list<StringFilter>|null,
     *     ResourceApplicationName?: list<StringFilter>|null,
     *     ResourceApplicationArn?: list<StringFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
