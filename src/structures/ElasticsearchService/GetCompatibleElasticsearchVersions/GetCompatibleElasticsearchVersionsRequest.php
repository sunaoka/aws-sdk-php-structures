<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\GetCompatibleElasticsearchVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DomainName
 */
class GetCompatibleElasticsearchVersionsRequest extends Request
{
    /**
     * @param array{DomainName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
