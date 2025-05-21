<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceARN
 * @property list<Shapes\Tag> $tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceARN: string,
     *     tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
