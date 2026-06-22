<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\GetMicrovmImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imageIdentifier
 */
class GetMicrovmImageRequest extends Request
{
    /**
     * @param array{imageIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
