<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateChapCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetARN
 * @property string $SecretToAuthenticateInitiator
 * @property string $InitiatorName
 * @property string|null $SecretToAuthenticateTarget
 */
class UpdateChapCredentialsRequest extends Request
{
    /**
     * @param array{
     *     TargetARN: string,
     *     SecretToAuthenticateInitiator: string,
     *     InitiatorName: string,
     *     SecretToAuthenticateTarget?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
