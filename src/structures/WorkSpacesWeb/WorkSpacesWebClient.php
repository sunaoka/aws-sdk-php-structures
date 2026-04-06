<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb;

class WorkSpacesWebClient extends \Aws\WorkSpacesWeb\WorkSpacesWebClient
{
    use AssociateBrowserSettings\AssociateBrowserSettingsTrait;
    use AssociateIpAccessSettings\AssociateIpAccessSettingsTrait;
    use AssociateNetworkSettings\AssociateNetworkSettingsTrait;
    use AssociateTrustStore\AssociateTrustStoreTrait;
    use AssociateUserAccessLoggingSettings\AssociateUserAccessLoggingSettingsTrait;
    use AssociateUserSettings\AssociateUserSettingsTrait;
    use CreateBrowserSettings\CreateBrowserSettingsTrait;
    use CreateIdentityProvider\CreateIdentityProviderTrait;
    use CreateIpAccessSettings\CreateIpAccessSettingsTrait;
    use CreateNetworkSettings\CreateNetworkSettingsTrait;
    use CreatePortal\CreatePortalTrait;
    use CreateTrustStore\CreateTrustStoreTrait;
    use CreateUserAccessLoggingSettings\CreateUserAccessLoggingSettingsTrait;
    use CreateUserSettings\CreateUserSettingsTrait;
    use DeleteBrowserSettings\DeleteBrowserSettingsTrait;
    use DeleteIdentityProvider\DeleteIdentityProviderTrait;
    use DeleteIpAccessSettings\DeleteIpAccessSettingsTrait;
    use DeleteNetworkSettings\DeleteNetworkSettingsTrait;
    use DeletePortal\DeletePortalTrait;
    use DeleteTrustStore\DeleteTrustStoreTrait;
    use DeleteUserAccessLoggingSettings\DeleteUserAccessLoggingSettingsTrait;
    use DeleteUserSettings\DeleteUserSettingsTrait;
    use DisassociateBrowserSettings\DisassociateBrowserSettingsTrait;
    use DisassociateIpAccessSettings\DisassociateIpAccessSettingsTrait;
    use DisassociateNetworkSettings\DisassociateNetworkSettingsTrait;
    use DisassociateTrustStore\DisassociateTrustStoreTrait;
    use DisassociateUserAccessLoggingSettings\DisassociateUserAccessLoggingSettingsTrait;
    use DisassociateUserSettings\DisassociateUserSettingsTrait;
    use GetBrowserSettings\GetBrowserSettingsTrait;
    use GetIdentityProvider\GetIdentityProviderTrait;
    use GetIpAccessSettings\GetIpAccessSettingsTrait;
    use GetNetworkSettings\GetNetworkSettingsTrait;
    use GetPortal\GetPortalTrait;
    use GetPortalServiceProviderMetadata\GetPortalServiceProviderMetadataTrait;
    use GetTrustStore\GetTrustStoreTrait;
    use GetTrustStoreCertificate\GetTrustStoreCertificateTrait;
    use GetUserAccessLoggingSettings\GetUserAccessLoggingSettingsTrait;
    use GetUserSettings\GetUserSettingsTrait;
    use ListBrowserSettings\ListBrowserSettingsTrait;
    use ListIdentityProviders\ListIdentityProvidersTrait;
    use ListIpAccessSettings\ListIpAccessSettingsTrait;
    use ListNetworkSettings\ListNetworkSettingsTrait;
    use ListPortals\ListPortalsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTrustStoreCertificates\ListTrustStoreCertificatesTrait;
    use ListTrustStores\ListTrustStoresTrait;
    use ListUserAccessLoggingSettings\ListUserAccessLoggingSettingsTrait;
    use ListUserSettings\ListUserSettingsTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateBrowserSettings\UpdateBrowserSettingsTrait;
    use UpdateIdentityProvider\UpdateIdentityProviderTrait;
    use UpdateIpAccessSettings\UpdateIpAccessSettingsTrait;
    use UpdateNetworkSettings\UpdateNetworkSettingsTrait;
    use UpdatePortal\UpdatePortalTrait;
    use UpdateTrustStore\UpdateTrustStoreTrait;
    use UpdateUserAccessLoggingSettings\UpdateUserAccessLoggingSettingsTrait;
    use UpdateUserSettings\UpdateUserSettingsTrait;
}
