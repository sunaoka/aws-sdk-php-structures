<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\GetCompatibleElasticsearchVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class GetCompatibleElasticsearchVersionsRequest extends Request
{
    /**
     * @param array{DomainName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
