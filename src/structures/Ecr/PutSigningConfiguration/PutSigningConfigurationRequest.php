<?php

namespace Sunaoka\Aws\Structures\Ecr\PutSigningConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SigningConfiguration $signingConfiguration
 */
class PutSigningConfigurationRequest extends Request
{
    /**
     * @param array{signingConfiguration: Shapes\SigningConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
