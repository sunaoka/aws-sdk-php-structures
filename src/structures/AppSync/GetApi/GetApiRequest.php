<?php

namespace Sunaoka\Aws\Structures\AppSync\GetApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 */
class GetApiRequest extends Request
{
    /**
     * @param array{apiId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
