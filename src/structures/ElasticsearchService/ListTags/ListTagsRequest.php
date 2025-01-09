<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\ListTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ARN
 */
class ListTagsRequest extends Request
{
    /**
     * @param array{ARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
