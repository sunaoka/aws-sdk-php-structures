<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $displayName
 * @property string $identityCenterInstanceArn
 * @property string $subdomain
 * @property string $roleArn
 */
class CreateMonitorRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     displayName: string,
     *     identityCenterInstanceArn: string,
     *     subdomain: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
