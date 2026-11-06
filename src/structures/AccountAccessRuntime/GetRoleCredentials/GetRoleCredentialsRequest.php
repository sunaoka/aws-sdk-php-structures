<?php

namespace Sunaoka\Aws\Structures\AccountAccessRuntime\GetRoleCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tenantId
 * @property string $roleArn
 * @property 'PROGRAMMATIC_ACCESS' $accessType
 * @property string|null $sessionName
 * @property int|null $sessionDuration
 */
class GetRoleCredentialsRequest extends Request
{
    /**
     * @param array{
     *     tenantId: string,
     *     roleArn: string,
     *     accessType: 'PROGRAMMATIC_ACCESS',
     *     sessionName?: string|null,
     *     sessionDuration?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
