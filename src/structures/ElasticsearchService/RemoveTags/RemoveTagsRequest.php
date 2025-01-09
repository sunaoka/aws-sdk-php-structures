<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\RemoveTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ARN
 * @property list<string> $TagKeys
 */
class RemoveTagsRequest extends Request
{
    /**
     * @param array{
     *     ARN: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
