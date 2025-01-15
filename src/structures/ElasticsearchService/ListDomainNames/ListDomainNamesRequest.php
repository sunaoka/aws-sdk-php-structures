<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\ListDomainNames;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'OpenSearch'|'Elasticsearch'|null $EngineType
 */
class ListDomainNamesRequest extends Request
{
    /**
     * @param array{EngineType?: 'OpenSearch'|'Elasticsearch'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
