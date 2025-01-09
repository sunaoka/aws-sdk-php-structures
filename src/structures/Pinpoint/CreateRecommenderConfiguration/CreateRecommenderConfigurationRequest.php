<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateRecommenderConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CreateRecommenderConfiguration $CreateRecommenderConfiguration
 */
class CreateRecommenderConfigurationRequest extends Request
{
    /**
     * @param array{CreateRecommenderConfiguration: Shapes\CreateRecommenderConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
