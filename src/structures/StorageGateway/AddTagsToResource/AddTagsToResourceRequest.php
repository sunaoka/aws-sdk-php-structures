<?php

namespace Sunaoka\Aws\Structures\StorageGateway\AddTagsToResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 * @property list<Shapes\Tag> $Tags
 */
class AddTagsToResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceARN: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
