<?php

namespace Sunaoka\Aws\Structures\AppSync\DeleteApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 */
class DeleteApiRequest extends Request
{
    /**
     * @param array{apiId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
