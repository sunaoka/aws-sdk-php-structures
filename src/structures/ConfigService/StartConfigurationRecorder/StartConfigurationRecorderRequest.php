<?php

namespace Sunaoka\Aws\Structures\ConfigService\StartConfigurationRecorder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationRecorderName
 */
class StartConfigurationRecorderRequest extends Request
{
    /**
     * @param array{ConfigurationRecorderName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
