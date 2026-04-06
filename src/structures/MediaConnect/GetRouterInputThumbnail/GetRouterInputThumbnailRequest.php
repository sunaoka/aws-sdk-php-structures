<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterInputThumbnail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class GetRouterInputThumbnailRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
