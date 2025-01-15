<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\ListDomainNames\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainName
 * @property 'OpenSearch'|'Elasticsearch'|null $EngineType
 */
class DomainInfo extends Shape
{
    /**
     * @param array{
     *     DomainName?: string|null,
     *     EngineType?: 'OpenSearch'|'Elasticsearch'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
