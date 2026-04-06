<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateParticipantAuthentication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $State
 * @property string $InstanceId
 * @property string|null $Code
 * @property string|null $Error
 * @property string|null $ErrorDescription
 */
class UpdateParticipantAuthenticationRequest extends Request
{
    /**
     * @param array{
     *     State: string,
     *     InstanceId: string,
     *     Code?: string|null,
     *     Error?: string|null,
     *     ErrorDescription?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
