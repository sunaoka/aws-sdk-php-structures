<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $displayName
 * @property string $identityCenterInstanceArn
 * @property string $roleArn
 * @property string $subdomain
 */
class CreateMonitorRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     displayName: string,
     *     identityCenterInstanceArn: string,
     *     roleArn: string,
     *     subdomain: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
