<?php

namespace Sunaoka\Aws\Structures\AppSync\DeleteGraphqlApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 */
class DeleteGraphqlApiRequest extends Request
{
    /**
     * @param array{apiId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
