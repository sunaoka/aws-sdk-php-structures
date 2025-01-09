<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDataSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class ListDataSourcesRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
