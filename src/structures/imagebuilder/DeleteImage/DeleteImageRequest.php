<?php

namespace Sunaoka\Aws\Structures\imagebuilder\DeleteImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imageBuildVersionArn
 */
class DeleteImageRequest extends Request
{
    /**
     * @param array{imageBuildVersionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
