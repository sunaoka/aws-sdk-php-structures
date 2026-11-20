<?php

namespace Sunaoka\Aws\Structures\MarketplaceDeployment;

class MarketplaceDeploymentClient extends \Aws\MarketplaceDeployment\MarketplaceDeploymentClient
{
    use GetDeploymentConfiguration\GetDeploymentConfigurationTrait;
    use GetDeploymentConfigurationJob\GetDeploymentConfigurationJobTrait;
    use ListDeploymentConfigurationJobs\ListDeploymentConfigurationJobsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutDeploymentParameter\PutDeploymentParameterTrait;
    use StartDeploymentConfigurationJob\StartDeploymentConfigurationJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
