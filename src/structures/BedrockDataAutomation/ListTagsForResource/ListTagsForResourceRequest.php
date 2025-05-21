<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\ListTagsForResource;

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
