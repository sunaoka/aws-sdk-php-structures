<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetPromptRouter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $promptRouterArn
 */
class GetPromptRouterRequest extends Request
{
    /**
     * @param array{promptRouterArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
