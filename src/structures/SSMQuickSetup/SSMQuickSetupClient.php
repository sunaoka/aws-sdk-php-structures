<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup;

class SSMQuickSetupClient extends \Aws\SSMQuickSetup\SSMQuickSetupClient
{
    use CreateConfigurationManager\CreateConfigurationManagerTrait;
    use DeleteConfigurationManager\DeleteConfigurationManagerTrait;
    use GetConfiguration\GetConfigurationTrait;
    use GetConfigurationManager\GetConfigurationManagerTrait;
    use GetServiceSettings\GetServiceSettingsTrait;
    use ListConfigurationManagers\ListConfigurationManagersTrait;
    use ListConfigurations\ListConfigurationsTrait;
    use ListQuickSetupTypes\ListQuickSetupTypesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateConfigurationDefinition\UpdateConfigurationDefinitionTrait;
    use UpdateConfigurationManager\UpdateConfigurationManagerTrait;
    use UpdateServiceSettings\UpdateServiceSettingsTrait;
}
