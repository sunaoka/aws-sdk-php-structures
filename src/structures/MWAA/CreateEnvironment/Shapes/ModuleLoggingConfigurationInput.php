<?php

namespace Sunaoka\Aws\Structures\MWAA\CreateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property 'CRITICAL'|'ERROR'|'WARNING'|'INFO'|'DEBUG' $LogLevel
 */
class ModuleLoggingConfigurationInput extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     LogLevel: 'CRITICAL'|'ERROR'|'WARNING'|'INFO'|'DEBUG'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
