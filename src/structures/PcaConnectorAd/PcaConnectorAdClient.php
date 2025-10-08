<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd;

class PcaConnectorAdClient extends \Aws\PcaConnectorAd\PcaConnectorAdClient
{
    use CreateConnector\CreateConnectorTrait;
    use CreateDirectoryRegistration\CreateDirectoryRegistrationTrait;
    use CreateServicePrincipalName\CreateServicePrincipalNameTrait;
    use CreateTemplate\CreateTemplateTrait;
    use CreateTemplateGroupAccessControlEntry\CreateTemplateGroupAccessControlEntryTrait;
    use DeleteConnector\DeleteConnectorTrait;
    use DeleteDirectoryRegistration\DeleteDirectoryRegistrationTrait;
    use DeleteServicePrincipalName\DeleteServicePrincipalNameTrait;
    use DeleteTemplate\DeleteTemplateTrait;
    use DeleteTemplateGroupAccessControlEntry\DeleteTemplateGroupAccessControlEntryTrait;
    use GetConnector\GetConnectorTrait;
    use GetDirectoryRegistration\GetDirectoryRegistrationTrait;
    use GetServicePrincipalName\GetServicePrincipalNameTrait;
    use GetTemplate\GetTemplateTrait;
    use GetTemplateGroupAccessControlEntry\GetTemplateGroupAccessControlEntryTrait;
    use ListConnectors\ListConnectorsTrait;
    use ListDirectoryRegistrations\ListDirectoryRegistrationsTrait;
    use ListServicePrincipalNames\ListServicePrincipalNamesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTemplateGroupAccessControlEntries\ListTemplateGroupAccessControlEntriesTrait;
    use ListTemplates\ListTemplatesTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateTemplate\UpdateTemplateTrait;
    use UpdateTemplateGroupAccessControlEntry\UpdateTemplateGroupAccessControlEntryTrait;
}
