<?php

namespace Sunaoka\Aws\Structures\Artifact;

class ArtifactClient extends \Aws\Artifact\ArtifactClient
{
    use GetAccountSettings\GetAccountSettingsTrait;
    use GetReport\GetReportTrait;
    use GetReportMetadata\GetReportMetadataTrait;
    use GetTermForReport\GetTermForReportTrait;
    use ListCustomerAgreements\ListCustomerAgreementsTrait;
    use ListReportVersions\ListReportVersionsTrait;
    use ListReports\ListReportsTrait;
    use PutAccountSettings\PutAccountSettingsTrait;
}
