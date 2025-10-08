<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetApiResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 */
class GetApiResourceRequest extends Request
{
    /**
     * @param array{ApiId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
