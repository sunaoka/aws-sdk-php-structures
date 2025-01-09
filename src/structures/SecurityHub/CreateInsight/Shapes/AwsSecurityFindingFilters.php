<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter> $ProductArn
 * @property list<StringFilter> $AwsAccountId
 * @property list<StringFilter> $Id
 * @property list<StringFilter> $GeneratorId
 * @property list<StringFilter> $Region
 * @property list<StringFilter> $Type
 * @property list<DateFilter> $FirstObservedAt
 * @property list<DateFilter> $LastObservedAt
 * @property list<DateFilter> $CreatedAt
 * @property list<DateFilter> $UpdatedAt
 * @property list<NumberFilter> $SeverityProduct
 * @property list<NumberFilter> $SeverityNormalized
 * @property list<StringFilter> $SeverityLabel
 * @property list<NumberFilter> $Confidence
 * @property list<NumberFilter> $Criticality
 * @property list<StringFilter> $Title
 * @property list<StringFilter> $Description
 * @property list<StringFilter> $RecommendationText
 * @property list<StringFilter> $SourceUrl
 * @property list<MapFilter> $ProductFields
 * @property list<StringFilter> $ProductName
 * @property list<StringFilter> $CompanyName
 * @property list<MapFilter> $UserDefinedFields
 * @property list<StringFilter> $MalwareName
 * @property list<StringFilter> $MalwareType
 * @property list<StringFilter> $MalwarePath
 * @property list<StringFilter> $MalwareState
 * @property list<StringFilter> $NetworkDirection
 * @property list<StringFilter> $NetworkProtocol
 * @property list<IpFilter> $NetworkSourceIpV4
 * @property list<IpFilter> $NetworkSourceIpV6
 * @property list<NumberFilter> $NetworkSourcePort
 * @property list<StringFilter> $NetworkSourceDomain
 * @property list<StringFilter> $NetworkSourceMac
 * @property list<IpFilter> $NetworkDestinationIpV4
 * @property list<IpFilter> $NetworkDestinationIpV6
 * @property list<NumberFilter> $NetworkDestinationPort
 * @property list<StringFilter> $NetworkDestinationDomain
 * @property list<StringFilter> $ProcessName
 * @property list<StringFilter> $ProcessPath
 * @property list<NumberFilter> $ProcessPid
 * @property list<NumberFilter> $ProcessParentPid
 * @property list<DateFilter> $ProcessLaunchedAt
 * @property list<DateFilter> $ProcessTerminatedAt
 * @property list<StringFilter> $ThreatIntelIndicatorType
 * @property list<StringFilter> $ThreatIntelIndicatorValue
 * @property list<StringFilter> $ThreatIntelIndicatorCategory
 * @property list<DateFilter> $ThreatIntelIndicatorLastObservedAt
 * @property list<StringFilter> $ThreatIntelIndicatorSource
 * @property list<StringFilter> $ThreatIntelIndicatorSourceUrl
 * @property list<StringFilter> $ResourceType
 * @property list<StringFilter> $ResourceId
 * @property list<StringFilter> $ResourcePartition
 * @property list<StringFilter> $ResourceRegion
 * @property list<MapFilter> $ResourceTags
 * @property list<StringFilter> $ResourceAwsEc2InstanceType
 * @property list<StringFilter> $ResourceAwsEc2InstanceImageId
 * @property list<IpFilter> $ResourceAwsEc2InstanceIpV4Addresses
 * @property list<IpFilter> $ResourceAwsEc2InstanceIpV6Addresses
 * @property list<StringFilter> $ResourceAwsEc2InstanceKeyName
 * @property list<StringFilter> $ResourceAwsEc2InstanceIamInstanceProfileArn
 * @property list<StringFilter> $ResourceAwsEc2InstanceVpcId
 * @property list<StringFilter> $ResourceAwsEc2InstanceSubnetId
 * @property list<DateFilter> $ResourceAwsEc2InstanceLaunchedAt
 * @property list<StringFilter> $ResourceAwsS3BucketOwnerId
 * @property list<StringFilter> $ResourceAwsS3BucketOwnerName
 * @property list<StringFilter> $ResourceAwsIamAccessKeyUserName
 * @property list<StringFilter> $ResourceAwsIamAccessKeyPrincipalName
 * @property list<StringFilter> $ResourceAwsIamAccessKeyStatus
 * @property list<DateFilter> $ResourceAwsIamAccessKeyCreatedAt
 * @property list<StringFilter> $ResourceAwsIamUserUserName
 * @property list<StringFilter> $ResourceContainerName
 * @property list<StringFilter> $ResourceContainerImageId
 * @property list<StringFilter> $ResourceContainerImageName
 * @property list<DateFilter> $ResourceContainerLaunchedAt
 * @property list<MapFilter> $ResourceDetailsOther
 * @property list<StringFilter> $ComplianceStatus
 * @property list<StringFilter> $VerificationState
 * @property list<StringFilter> $WorkflowState
 * @property list<StringFilter> $WorkflowStatus
 * @property list<StringFilter> $RecordState
 * @property list<StringFilter> $RelatedFindingsProductArn
 * @property list<StringFilter> $RelatedFindingsId
 * @property list<StringFilter> $NoteText
 * @property list<DateFilter> $NoteUpdatedAt
 * @property list<StringFilter> $NoteUpdatedBy
 * @property list<KeywordFilter> $Keyword
 * @property list<NumberFilter> $FindingProviderFieldsConfidence
 * @property list<NumberFilter> $FindingProviderFieldsCriticality
 * @property list<StringFilter> $FindingProviderFieldsRelatedFindingsId
 * @property list<StringFilter> $FindingProviderFieldsRelatedFindingsProductArn
 * @property list<StringFilter> $FindingProviderFieldsSeverityLabel
 * @property list<StringFilter> $FindingProviderFieldsSeverityOriginal
 * @property list<StringFilter> $FindingProviderFieldsTypes
 * @property list<BooleanFilter> $Sample
 * @property list<StringFilter> $ComplianceSecurityControlId
 * @property list<StringFilter> $ComplianceAssociatedStandardsId
 * @property list<StringFilter> $VulnerabilitiesExploitAvailable
 * @property list<StringFilter> $VulnerabilitiesFixAvailable
 * @property list<StringFilter> $ComplianceSecurityControlParametersName
 * @property list<StringFilter> $ComplianceSecurityControlParametersValue
 * @property list<StringFilter> $AwsAccountName
 * @property list<StringFilter> $ResourceApplicationName
 * @property list<StringFilter> $ResourceApplicationArn
 */
class AwsSecurityFindingFilters extends Shape
{
    /**
     * @param array{
     *     ProductArn?: list<StringFilter>,
     *     AwsAccountId?: list<StringFilter>,
     *     Id?: list<StringFilter>,
     *     GeneratorId?: list<StringFilter>,
     *     Region?: list<StringFilter>,
     *     Type?: list<StringFilter>,
     *     FirstObservedAt?: list<DateFilter>,
     *     LastObservedAt?: list<DateFilter>,
     *     CreatedAt?: list<DateFilter>,
     *     UpdatedAt?: list<DateFilter>,
     *     SeverityProduct?: list<NumberFilter>,
     *     SeverityNormalized?: list<NumberFilter>,
     *     SeverityLabel?: list<StringFilter>,
     *     Confidence?: list<NumberFilter>,
     *     Criticality?: list<NumberFilter>,
     *     Title?: list<StringFilter>,
     *     Description?: list<StringFilter>,
     *     RecommendationText?: list<StringFilter>,
     *     SourceUrl?: list<StringFilter>,
     *     ProductFields?: list<MapFilter>,
     *     ProductName?: list<StringFilter>,
     *     CompanyName?: list<StringFilter>,
     *     UserDefinedFields?: list<MapFilter>,
     *     MalwareName?: list<StringFilter>,
     *     MalwareType?: list<StringFilter>,
     *     MalwarePath?: list<StringFilter>,
     *     MalwareState?: list<StringFilter>,
     *     NetworkDirection?: list<StringFilter>,
     *     NetworkProtocol?: list<StringFilter>,
     *     NetworkSourceIpV4?: list<IpFilter>,
     *     NetworkSourceIpV6?: list<IpFilter>,
     *     NetworkSourcePort?: list<NumberFilter>,
     *     NetworkSourceDomain?: list<StringFilter>,
     *     NetworkSourceMac?: list<StringFilter>,
     *     NetworkDestinationIpV4?: list<IpFilter>,
     *     NetworkDestinationIpV6?: list<IpFilter>,
     *     NetworkDestinationPort?: list<NumberFilter>,
     *     NetworkDestinationDomain?: list<StringFilter>,
     *     ProcessName?: list<StringFilter>,
     *     ProcessPath?: list<StringFilter>,
     *     ProcessPid?: list<NumberFilter>,
     *     ProcessParentPid?: list<NumberFilter>,
     *     ProcessLaunchedAt?: list<DateFilter>,
     *     ProcessTerminatedAt?: list<DateFilter>,
     *     ThreatIntelIndicatorType?: list<StringFilter>,
     *     ThreatIntelIndicatorValue?: list<StringFilter>,
     *     ThreatIntelIndicatorCategory?: list<StringFilter>,
     *     ThreatIntelIndicatorLastObservedAt?: list<DateFilter>,
     *     ThreatIntelIndicatorSource?: list<StringFilter>,
     *     ThreatIntelIndicatorSourceUrl?: list<StringFilter>,
     *     ResourceType?: list<StringFilter>,
     *     ResourceId?: list<StringFilter>,
     *     ResourcePartition?: list<StringFilter>,
     *     ResourceRegion?: list<StringFilter>,
     *     ResourceTags?: list<MapFilter>,
     *     ResourceAwsEc2InstanceType?: list<StringFilter>,
     *     ResourceAwsEc2InstanceImageId?: list<StringFilter>,
     *     ResourceAwsEc2InstanceIpV4Addresses?: list<IpFilter>,
     *     ResourceAwsEc2InstanceIpV6Addresses?: list<IpFilter>,
     *     ResourceAwsEc2InstanceKeyName?: list<StringFilter>,
     *     ResourceAwsEc2InstanceIamInstanceProfileArn?: list<StringFilter>,
     *     ResourceAwsEc2InstanceVpcId?: list<StringFilter>,
     *     ResourceAwsEc2InstanceSubnetId?: list<StringFilter>,
     *     ResourceAwsEc2InstanceLaunchedAt?: list<DateFilter>,
     *     ResourceAwsS3BucketOwnerId?: list<StringFilter>,
     *     ResourceAwsS3BucketOwnerName?: list<StringFilter>,
     *     ResourceAwsIamAccessKeyUserName?: list<StringFilter>,
     *     ResourceAwsIamAccessKeyPrincipalName?: list<StringFilter>,
     *     ResourceAwsIamAccessKeyStatus?: list<StringFilter>,
     *     ResourceAwsIamAccessKeyCreatedAt?: list<DateFilter>,
     *     ResourceAwsIamUserUserName?: list<StringFilter>,
     *     ResourceContainerName?: list<StringFilter>,
     *     ResourceContainerImageId?: list<StringFilter>,
     *     ResourceContainerImageName?: list<StringFilter>,
     *     ResourceContainerLaunchedAt?: list<DateFilter>,
     *     ResourceDetailsOther?: list<MapFilter>,
     *     ComplianceStatus?: list<StringFilter>,
     *     VerificationState?: list<StringFilter>,
     *     WorkflowState?: list<StringFilter>,
     *     WorkflowStatus?: list<StringFilter>,
     *     RecordState?: list<StringFilter>,
     *     RelatedFindingsProductArn?: list<StringFilter>,
     *     RelatedFindingsId?: list<StringFilter>,
     *     NoteText?: list<StringFilter>,
     *     NoteUpdatedAt?: list<DateFilter>,
     *     NoteUpdatedBy?: list<StringFilter>,
     *     Keyword?: list<KeywordFilter>,
     *     FindingProviderFieldsConfidence?: list<NumberFilter>,
     *     FindingProviderFieldsCriticality?: list<NumberFilter>,
     *     FindingProviderFieldsRelatedFindingsId?: list<StringFilter>,
     *     FindingProviderFieldsRelatedFindingsProductArn?: list<StringFilter>,
     *     FindingProviderFieldsSeverityLabel?: list<StringFilter>,
     *     FindingProviderFieldsSeverityOriginal?: list<StringFilter>,
     *     FindingProviderFieldsTypes?: list<StringFilter>,
     *     Sample?: list<BooleanFilter>,
     *     ComplianceSecurityControlId?: list<StringFilter>,
     *     ComplianceAssociatedStandardsId?: list<StringFilter>,
     *     VulnerabilitiesExploitAvailable?: list<StringFilter>,
     *     VulnerabilitiesFixAvailable?: list<StringFilter>,
     *     ComplianceSecurityControlParametersName?: list<StringFilter>,
     *     ComplianceSecurityControlParametersValue?: list<StringFilter>,
     *     AwsAccountName?: list<StringFilter>,
     *     ResourceApplicationName?: list<StringFilter>,
     *     ResourceApplicationArn?: list<StringFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
