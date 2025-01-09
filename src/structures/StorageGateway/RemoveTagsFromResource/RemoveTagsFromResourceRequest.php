<?php

namespace Sunaoka\Aws\Structures\StorageGateway\RemoveTagsFromResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 * @property list<string> $TagKeys
 */
class RemoveTagsFromResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceARN: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
