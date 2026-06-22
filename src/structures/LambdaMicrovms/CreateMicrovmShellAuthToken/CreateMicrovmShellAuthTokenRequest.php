<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\CreateMicrovmShellAuthToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $microvmIdentifier
 * @property int<1, max> $expirationInMinutes
 */
class CreateMicrovmShellAuthTokenRequest extends Request
{
    /**
     * @param array{
     *     microvmIdentifier: string,
     *     expirationInMinutes: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
