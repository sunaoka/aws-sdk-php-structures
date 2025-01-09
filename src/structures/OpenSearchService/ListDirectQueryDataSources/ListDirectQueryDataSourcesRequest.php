<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDirectQueryDataSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 */
class ListDirectQueryDataSourcesRequest extends Request
{
    /**
     * @param array{NextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
