<?php

namespace Sunaoka\Aws\Structures\Iot\SetV2LoggingLevel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\LogTarget $logTarget
 * @property 'DEBUG'|'INFO'|'ERROR'|'WARN'|'DISABLED' $logLevel
 */
class SetV2LoggingLevelRequest extends Request
{
    /**
     * @param array{
     *     logTarget: Shapes\LogTarget,
     *     logLevel: 'DEBUG'|'INFO'|'ERROR'|'WARN'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
