<?php

namespace Sunaoka\Aws\Structures\MediaStore\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Resource
 * @property list<string> $TagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     Resource: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
