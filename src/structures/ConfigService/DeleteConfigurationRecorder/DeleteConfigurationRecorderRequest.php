<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteConfigurationRecorder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationRecorderName
 */
class DeleteConfigurationRecorderRequest extends Request
{
    /**
     * @param array{ConfigurationRecorderName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
