<?php

namespace Sunaoka\Aws\Structures\imagebuilder\RetryImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imageBuildVersionArn
 * @property string $clientToken
 */
class RetryImageRequest extends Request
{
    /**
     * @param array{
     *     imageBuildVersionArn: string,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
