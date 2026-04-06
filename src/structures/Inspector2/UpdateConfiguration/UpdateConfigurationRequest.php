<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EcrConfiguration $ecrConfiguration
 */
class UpdateConfigurationRequest extends Request
{
    /**
     * @param array{ecrConfiguration: Shapes\EcrConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
