<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice\CreateConfigurationSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 */
class CreateConfigurationSetRequest extends Request
{
    /**
     * @param array{ConfigurationSetName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
