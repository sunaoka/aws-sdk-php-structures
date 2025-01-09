<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetModelTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $ModelId
 */
class GetModelTemplateRequest extends Request
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
