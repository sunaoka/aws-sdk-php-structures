<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\DeleteConfigurationSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 */
class DeleteConfigurationSetRequest extends Request
{
    /**
     * @param array{ConfigurationSetName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
