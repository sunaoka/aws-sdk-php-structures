<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageName
 */
class DeleteImageRequest extends Request
{
    /**
     * @param array{ImageName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
