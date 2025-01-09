<?php

namespace Sunaoka\Aws\Structures\ConfigService\StopConfigurationRecorder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationRecorderName
 */
class StopConfigurationRecorderRequest extends Request
{
    /**
     * @param array{ConfigurationRecorderName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
