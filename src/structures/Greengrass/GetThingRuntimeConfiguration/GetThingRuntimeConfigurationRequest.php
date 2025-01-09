<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetThingRuntimeConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ThingName
 */
class GetThingRuntimeConfigurationRequest extends Request
{
    /**
     * @param array{ThingName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
