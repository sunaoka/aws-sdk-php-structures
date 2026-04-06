<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeletePromptRouter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $promptRouterArn
 */
class DeletePromptRouterRequest extends Request
{
    /**
     * @param array{promptRouterArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
