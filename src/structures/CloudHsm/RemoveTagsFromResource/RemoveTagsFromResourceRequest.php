<?php

namespace Sunaoka\Aws\Structures\CloudHsm\RemoveTagsFromResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property list<string> $TagKeyList
 */
class RemoveTagsFromResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     TagKeyList: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
