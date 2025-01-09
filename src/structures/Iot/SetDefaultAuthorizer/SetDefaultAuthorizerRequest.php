<?php

namespace Sunaoka\Aws\Structures\Iot\SetDefaultAuthorizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $authorizerName
 */
class SetDefaultAuthorizerRequest extends Request
{
    /**
     * @param array{authorizerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
