<?php

namespace Sunaoka\Aws\Structures\Artifact;

class ArtifactClient extends \Aws\Artifact\ArtifactClient
{
    use CreateComplianceInquiry\CreateComplianceInquiryTrait;
    use ExportComplianceInquiry\ExportComplianceInquiryTrait;
    use GetAccountSettings\GetAccountSettingsTrait;
    use GetComplianceInquiryMetadata\GetComplianceInquiryMetadataTrait;
    use GetReport\GetReportTrait;
    use GetReportMetadata\GetReportMetadataTrait;
    use GetTermForReport\GetTermForReportTrait;
    use ListComplianceInquiries\ListComplianceInquiriesTrait;
    use ListComplianceInquiryQueries\ListComplianceInquiryQueriesTrait;
    use ListCustomerAgreements\ListCustomerAgreementsTrait;
    use ListReportVersions\ListReportVersionsTrait;
    use ListReports\ListReportsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutAccountSettings\PutAccountSettingsTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
