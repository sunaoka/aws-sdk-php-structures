<?php

namespace Sunaoka\Aws\Structures\GameLift\RequestUploadCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BuildId
 */
class RequestUploadCredentialsRequest extends Request
{
    /**
     * @param array{BuildId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
