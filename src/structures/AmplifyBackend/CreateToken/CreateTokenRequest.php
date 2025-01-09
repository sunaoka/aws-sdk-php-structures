<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CreateToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 */
class CreateTokenRequest extends Request
{
    /**
     * @param array{AppId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
