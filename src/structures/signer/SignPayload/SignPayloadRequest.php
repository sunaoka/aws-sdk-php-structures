<?php

namespace Sunaoka\Aws\Structures\signer\SignPayload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileName
 * @property string $profileOwner
 * @property string $payload
 * @property string $payloadFormat
 */
class SignPayloadRequest extends Request
{
    /**
     * @param array{
     *     profileName: string,
     *     profileOwner?: string,
     *     payload: string,
     *     payloadFormat: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
