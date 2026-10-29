<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CompareDomainConfiguration;

trait CompareDomainConfigurationTrait
{
    /**
     * @param CompareDomainConfigurationRequest $args
     * @return CompareDomainConfigurationResponse
     */
    public function compareDomainConfiguration(CompareDomainConfigurationRequest $args)
    {
        $result = parent::compareDomainConfiguration($args->toArray());
        return new CompareDomainConfigurationResponse($result->toArray());
    }
}
