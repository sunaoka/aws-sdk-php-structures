<?php

namespace Sunaoka\Aws\Structures\Iot\SetV2LoggingOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $roleArn
 * @property 'DEBUG'|'INFO'|'ERROR'|'WARN'|'DISABLED'|null $defaultLogLevel
 * @property bool|null $disableAllLogs
 * @property list<Shapes\LogEventConfiguration>|null $eventConfigurations
 */
class SetV2LoggingOptionsRequest extends Request
{
    /**
     * @param array{
     *     roleArn?: string|null,
     *     defaultLogLevel?: 'DEBUG'|'INFO'|'ERROR'|'WARN'|'DISABLED'|null,
     *     disableAllLogs?: bool|null,
     *     eventConfigurations?: list<Shapes\LogEventConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
