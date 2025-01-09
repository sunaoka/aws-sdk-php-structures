<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDomainNames;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'OpenSearch'|'Elasticsearch' $EngineType
 */
class ListDomainNamesRequest extends Request
{
    /**
     * @param array{EngineType?: 'OpenSearch'|'Elasticsearch'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
