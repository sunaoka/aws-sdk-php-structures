<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateParticipantAuthentication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $State
 * @property string $InstanceId
 * @property string $Code
 * @property string $Error
 * @property string $ErrorDescription
 */
class UpdateParticipantAuthenticationRequest extends Request
{
    /**
     * @param array{
     *     State: string,
     *     InstanceId: string,
     *     Code?: string,
     *     Error?: string,
     *     ErrorDescription?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
