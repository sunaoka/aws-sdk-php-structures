<?php

namespace Sunaoka\Aws\Structures\SageMaker\AddTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property list<Shapes\Tag> $Tags
 */
class AddTagsRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
