<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteAuthorizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $authorizerName
 */
class DeleteAuthorizerRequest extends Request
{
    /**
     * @param array{authorizerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
