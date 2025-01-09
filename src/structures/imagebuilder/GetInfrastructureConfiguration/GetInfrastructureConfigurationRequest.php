<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetInfrastructureConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $infrastructureConfigurationArn
 */
class GetInfrastructureConfigurationRequest extends Request
{
    /**
     * @param array{infrastructureConfigurationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
