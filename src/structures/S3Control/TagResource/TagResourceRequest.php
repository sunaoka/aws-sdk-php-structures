<?php

namespace Sunaoka\Aws\Structures\S3Control\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $ResourceArn
 * @property list<Shapes\Tag> $Tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     ResourceArn: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
