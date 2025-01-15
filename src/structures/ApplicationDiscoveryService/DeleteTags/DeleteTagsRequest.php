<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DeleteTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $configurationIds
 * @property list<Shapes\Tag>|null $tags
 */
class DeleteTagsRequest extends Request
{
    /**
     * @param array{
     *     configurationIds: list<string>,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
