<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDomainNames\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property 'OpenSearch'|'Elasticsearch' $EngineType
 */
class DomainInfo extends Shape
{
    /**
     * @param array{
     *     DomainName?: string,
     *     EngineType?: 'OpenSearch'|'Elasticsearch'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
