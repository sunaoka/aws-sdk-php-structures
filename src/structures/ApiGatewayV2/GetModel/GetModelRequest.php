<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $ModelId
 */
class GetModelRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     ModelId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
