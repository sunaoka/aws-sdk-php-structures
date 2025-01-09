<?php

namespace Sunaoka\Aws\Structures\imagebuilder\DeleteInfrastructureConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $infrastructureConfigurationArn
 */
class DeleteInfrastructureConfigurationRequest extends Request
{
    /**
     * @param array{infrastructureConfigurationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
