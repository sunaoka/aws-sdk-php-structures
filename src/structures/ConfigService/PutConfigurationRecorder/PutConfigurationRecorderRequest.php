<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConfigurationRecorder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ConfigurationRecorder $ConfigurationRecorder
 */
class PutConfigurationRecorderRequest extends Request
{
    /**
     * @param array{ConfigurationRecorder: Shapes\ConfigurationRecorder} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
