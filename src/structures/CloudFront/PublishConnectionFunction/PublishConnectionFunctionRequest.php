<?php

namespace Sunaoka\Aws\Structures\CloudFront\PublishConnectionFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $IfMatch
 */
class PublishConnectionFunctionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     IfMatch: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
