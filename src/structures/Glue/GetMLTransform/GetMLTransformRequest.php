<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTransform;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransformId
 */
class GetMLTransformRequest extends Request
{
    /**
     * @param array{TransformId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
