<?php

namespace Sunaoka\Aws\Structures\Emr\PutBlockPublicAccessConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\BlockPublicAccessConfiguration $BlockPublicAccessConfiguration
 */
class PutBlockPublicAccessConfigurationRequest extends Request
{
    /**
     * @param array{BlockPublicAccessConfiguration: Shapes\BlockPublicAccessConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
