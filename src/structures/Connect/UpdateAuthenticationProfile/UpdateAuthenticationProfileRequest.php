<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateAuthenticationProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationProfileId
 * @property string $InstanceId
 * @property string|null $Name
 * @property string|null $Description
 * @property list<string>|null $AllowedIps
 * @property list<string>|null $BlockedIps
 * @property int<10, 60>|null $PeriodicSessionDuration
 */
class UpdateAuthenticationProfileRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationProfileId: string,
     *     InstanceId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     AllowedIps?: list<string>|null,
     *     BlockedIps?: list<string>|null,
     *     PeriodicSessionDuration?: int<10, 60>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
