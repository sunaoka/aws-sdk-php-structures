<?php

namespace Sunaoka\Aws\Structures\WorkLink;

class WorkLinkClient extends \Aws\WorkLink\WorkLinkClient
{
    use AssociateDomain\AssociateDomainTrait;
    use AssociateWebsiteAuthorizationProvider\AssociateWebsiteAuthorizationProviderTrait;
    use AssociateWebsiteCertificateAuthority\AssociateWebsiteCertificateAuthorityTrait;
    use CreateFleet\CreateFleetTrait;
    use DeleteFleet\DeleteFleetTrait;
    use DescribeAuditStreamConfiguration\DescribeAuditStreamConfigurationTrait;
    use DescribeCompanyNetworkConfiguration\DescribeCompanyNetworkConfigurationTrait;
    use DescribeDevice\DescribeDeviceTrait;
    use DescribeDevicePolicyConfiguration\DescribeDevicePolicyConfigurationTrait;
    use DescribeDomain\DescribeDomainTrait;
    use DescribeFleetMetadata\DescribeFleetMetadataTrait;
    use DescribeIdentityProviderConfiguration\DescribeIdentityProviderConfigurationTrait;
    use DescribeWebsiteCertificateAuthority\DescribeWebsiteCertificateAuthorityTrait;
    use DisassociateDomain\DisassociateDomainTrait;
    use DisassociateWebsiteAuthorizationProvider\DisassociateWebsiteAuthorizationProviderTrait;
    use DisassociateWebsiteCertificateAuthority\DisassociateWebsiteCertificateAuthorityTrait;
    use ListDevices\ListDevicesTrait;
    use ListDomains\ListDomainsTrait;
    use ListFleets\ListFleetsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListWebsiteAuthorizationProviders\ListWebsiteAuthorizationProvidersTrait;
    use ListWebsiteCertificateAuthorities\ListWebsiteCertificateAuthoritiesTrait;
    use RestoreDomainAccess\RestoreDomainAccessTrait;
    use RevokeDomainAccess\RevokeDomainAccessTrait;
    use SignOutUser\SignOutUserTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAuditStreamConfiguration\UpdateAuditStreamConfigurationTrait;
    use UpdateCompanyNetworkConfiguration\UpdateCompanyNetworkConfigurationTrait;
    use UpdateDevicePolicyConfiguration\UpdateDevicePolicyConfigurationTrait;
    use UpdateDomainMetadata\UpdateDomainMetadataTrait;
    use UpdateFleetMetadata\UpdateFleetMetadataTrait;
    use UpdateIdentityProviderConfiguration\UpdateIdentityProviderConfigurationTrait;
}
