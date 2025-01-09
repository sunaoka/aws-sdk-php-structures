<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\CreateTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $configurationIds
 * @property list<Shapes\Tag> $tags
 */
class CreateTagsRequest extends Request
{
    /**
     * @param array{
     *     configurationIds: list<string>,
     *     tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
