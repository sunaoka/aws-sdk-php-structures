<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $displayName
 * @property string $identityCenterInstanceArn
 * @property string|null $identityCenterRegion
 * @property string $subdomain
 * @property string $roleArn
 * @property array<string, string>|null $tags
 */
class CreateMonitorRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     displayName: string,
     *     identityCenterInstanceArn: string,
     *     identityCenterRegion?: string|null,
     *     subdomain: string,
     *     roleArn: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
