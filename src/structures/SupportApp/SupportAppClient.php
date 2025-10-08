<?php

namespace Sunaoka\Aws\Structures\SupportApp;

class SupportAppClient extends \Aws\SupportApp\SupportAppClient
{
    use CreateSlackChannelConfiguration\CreateSlackChannelConfigurationTrait;
    use DeleteAccountAlias\DeleteAccountAliasTrait;
    use DeleteSlackChannelConfiguration\DeleteSlackChannelConfigurationTrait;
    use DeleteSlackWorkspaceConfiguration\DeleteSlackWorkspaceConfigurationTrait;
    use GetAccountAlias\GetAccountAliasTrait;
    use ListSlackChannelConfigurations\ListSlackChannelConfigurationsTrait;
    use ListSlackWorkspaceConfigurations\ListSlackWorkspaceConfigurationsTrait;
    use PutAccountAlias\PutAccountAliasTrait;
    use RegisterSlackWorkspaceForOrganization\RegisterSlackWorkspaceForOrganizationTrait;
    use UpdateSlackChannelConfiguration\UpdateSlackChannelConfigurationTrait;
}
