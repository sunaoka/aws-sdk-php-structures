<?php

namespace Sunaoka\Aws\Structures\AppSync\GetGraphqlApiEnvironmentVariables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 */
class GetGraphqlApiEnvironmentVariablesRequest extends Request
{
    /**
     * @param array{apiId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
