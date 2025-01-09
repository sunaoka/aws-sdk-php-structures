<?php

namespace Sunaoka\Aws\Structures\AppSync\GetGraphqlApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 */
class GetGraphqlApiRequest extends Request
{
    /**
     * @param array{apiId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
