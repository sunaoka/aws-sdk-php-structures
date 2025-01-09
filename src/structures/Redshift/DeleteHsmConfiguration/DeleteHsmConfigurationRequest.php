<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteHsmConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HsmConfigurationIdentifier
 */
class DeleteHsmConfigurationRequest extends Request
{
    /**
     * @param array{HsmConfigurationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
