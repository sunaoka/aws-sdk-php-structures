<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\DeleteToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 * @property string $SessionId
 */
class DeleteTokenRequest extends Request
{
    /**
     * @param array{
     *     AppId: string,
     *     SessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
