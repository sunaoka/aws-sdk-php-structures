<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AddTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ARN
 * @property list<Shapes\Tag> $TagList
 */
class AddTagsRequest extends Request
{
    /**
     * @param array{
     *     ARN: string,
     *     TagList: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
