<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property list<string>|null $TagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     TagKeys?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
