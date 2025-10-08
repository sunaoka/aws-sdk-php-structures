<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CreateElasticsearchDomain;

trait CreateElasticsearchDomainTrait
{
    /**
     * @param CreateElasticsearchDomainRequest $args
     * @return CreateElasticsearchDomainResponse
     */
    public function createElasticsearchDomain(CreateElasticsearchDomainRequest $args)
    {
        $result = parent::createElasticsearchDomain($args->toArray());
        return new CreateElasticsearchDomainResponse($result->toArray());
    }
}
