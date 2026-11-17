<?php

namespace Sunaoka\Aws\Structures\Health\ConfigureTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ResourceTagKey> $tagKeys
 */
class ConfigureTagsRequest extends Request
{
    /**
     * @param array{tagKeys: list<Shapes\ResourceTagKey>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
