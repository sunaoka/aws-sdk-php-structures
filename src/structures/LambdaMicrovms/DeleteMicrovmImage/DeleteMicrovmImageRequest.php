<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\DeleteMicrovmImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imageIdentifier
 */
class DeleteMicrovmImageRequest extends Request
{
    /**
     * @param array{imageIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
