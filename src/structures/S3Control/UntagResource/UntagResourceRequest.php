<?php

namespace Sunaoka\Aws\Structures\S3Control\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $ResourceArn
 * @property list<string> $TagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     ResourceArn: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
