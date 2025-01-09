<?php

namespace Sunaoka\Aws\Structures\Iot\SetV2LoggingOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $roleArn
 * @property 'DEBUG'|'INFO'|'ERROR'|'WARN'|'DISABLED' $defaultLogLevel
 * @property bool $disableAllLogs
 */
class SetV2LoggingOptionsRequest extends Request
{
    /**
     * @param array{
     *     roleArn?: string,
     *     defaultLogLevel?: 'DEBUG'|'INFO'|'ERROR'|'WARN'|'DISABLED',
     *     disableAllLogs?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
