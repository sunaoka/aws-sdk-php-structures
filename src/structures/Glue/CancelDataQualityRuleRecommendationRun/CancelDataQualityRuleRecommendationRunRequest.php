<?php

namespace Sunaoka\Aws\Structures\Glue\CancelDataQualityRuleRecommendationRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RunId
 */
class CancelDataQualityRuleRecommendationRunRequest extends Request
{
    /**
     * @param array{RunId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
