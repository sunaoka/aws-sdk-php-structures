<?php

namespace Sunaoka\Aws\Structures\Ses\CreateConfigurationSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ConfigurationSet $ConfigurationSet
 */
class CreateConfigurationSetRequest extends Request
{
    /**
     * @param array{ConfigurationSet: Shapes\ConfigurationSet} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
