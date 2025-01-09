<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceARN
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{resourceARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
