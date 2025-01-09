<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteMLTransform;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransformId
 */
class DeleteMLTransformRequest extends Request
{
    /**
     * @param array{TransformId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
