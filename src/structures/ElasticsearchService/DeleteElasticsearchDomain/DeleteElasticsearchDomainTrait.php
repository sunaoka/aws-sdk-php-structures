<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DeleteElasticsearchDomain;

trait DeleteElasticsearchDomainTrait
{
    /**
     * @param DeleteElasticsearchDomainRequest $args
     * @return DeleteElasticsearchDomainResponse
     */
    public function deleteElasticsearchDomain(DeleteElasticsearchDomainRequest $args)
    {
        $result = parent::deleteElasticsearchDomain($args->toArray());
        return new DeleteElasticsearchDomainResponse($result->toArray());
    }
}
