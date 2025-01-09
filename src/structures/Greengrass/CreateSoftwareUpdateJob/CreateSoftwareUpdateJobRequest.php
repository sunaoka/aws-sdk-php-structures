<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateSoftwareUpdateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AmznClientToken
 * @property string $S3UrlSignerRole
 * @property 'core'|'ota_agent' $SoftwareToUpdate
 * @property 'NONE'|'TRACE'|'DEBUG'|'VERBOSE'|'INFO'|'WARN'|'ERROR'|'FATAL' $UpdateAgentLogLevel
 * @property list<string> $UpdateTargets
 * @property 'armv6l'|'armv7l'|'x86_64'|'aarch64' $UpdateTargetsArchitecture
 * @property 'ubuntu'|'raspbian'|'amazon_linux'|'openwrt' $UpdateTargetsOperatingSystem
 */
class CreateSoftwareUpdateJobRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string,
     *     S3UrlSignerRole: string,
     *     SoftwareToUpdate: 'core'|'ota_agent',
     *     UpdateAgentLogLevel?: 'NONE'|'TRACE'|'DEBUG'|'VERBOSE'|'INFO'|'WARN'|'ERROR'|'FATAL',
     *     UpdateTargets: list<string>,
     *     UpdateTargetsArchitecture: 'armv6l'|'armv7l'|'x86_64'|'aarch64',
     *     UpdateTargetsOperatingSystem: 'ubuntu'|'raspbian'|'amazon_linux'|'openwrt'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
