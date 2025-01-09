<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateRecommenderConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RecommenderId
 * @property Shapes\UpdateRecommenderConfiguration $UpdateRecommenderConfiguration
 */
class UpdateRecommenderConfigurationRequest extends Request
{
    /**
     * @param array{
     *     RecommenderId: string,
     *     UpdateRecommenderConfiguration: Shapes\UpdateRecommenderConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
