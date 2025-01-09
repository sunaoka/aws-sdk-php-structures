<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteCorsConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 */
class DeleteCorsConfigurationRequest extends Request
{
    /**
     * @param array{ApiId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
