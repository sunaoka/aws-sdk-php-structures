<?php

namespace Sunaoka\Aws\Structures\CloudFront\PublishFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $IfMatch
 */
class PublishFunctionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     IfMatch: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
