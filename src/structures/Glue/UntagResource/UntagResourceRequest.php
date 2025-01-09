<?php

namespace Sunaoka\Aws\Structures\Glue\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property list<string> $TagsToRemove
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     TagsToRemove: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
