<?php

namespace Sunaoka\Aws\Structures\S3Control\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $ResourceArn
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
