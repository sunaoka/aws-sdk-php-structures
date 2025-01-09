<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imageBuildVersionArn
 */
class GetImageRequest extends Request
{
    /**
     * @param array{imageBuildVersionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
