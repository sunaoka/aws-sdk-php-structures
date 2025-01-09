<?php

namespace Sunaoka\Aws\Structures\Pinpoint\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property Shapes\TagsModel $TagsModel
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     TagsModel: Shapes\TagsModel
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
