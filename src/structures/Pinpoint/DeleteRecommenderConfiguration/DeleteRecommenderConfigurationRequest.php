<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteRecommenderConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RecommenderId
 */
class DeleteRecommenderConfigurationRequest extends Request
{
    /**
     * @param array{RecommenderId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
