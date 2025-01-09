<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DeleteElasticsearchDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class DeleteElasticsearchDomainRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
