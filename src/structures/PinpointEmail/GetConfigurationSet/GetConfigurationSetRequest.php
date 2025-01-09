<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetConfigurationSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 */
class GetConfigurationSetRequest extends Request
{
    /**
     * @param array{ConfigurationSetName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
