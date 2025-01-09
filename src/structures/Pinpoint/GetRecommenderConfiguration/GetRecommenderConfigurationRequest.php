<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetRecommenderConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RecommenderId
 */
class GetRecommenderConfigurationRequest extends Request
{
    /**
     * @param array{RecommenderId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
