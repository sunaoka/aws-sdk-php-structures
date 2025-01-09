<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 * @property string $SessionId
 */
class GetTokenRequest extends Request
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
