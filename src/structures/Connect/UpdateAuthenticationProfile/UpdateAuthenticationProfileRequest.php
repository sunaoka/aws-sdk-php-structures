<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateAuthenticationProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationProfileId
 * @property string $InstanceId
 * @property string $Name
 * @property string $Description
 * @property list<string> $AllowedIps
 * @property list<string> $BlockedIps
 * @property int $PeriodicSessionDuration
 */
class UpdateAuthenticationProfileRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationProfileId: string,
     *     InstanceId: string,
     *     Name?: string,
     *     Description?: string,
     *     AllowedIps?: list<string>,
     *     BlockedIps?: list<string>,
     *     PeriodicSessionDuration?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
