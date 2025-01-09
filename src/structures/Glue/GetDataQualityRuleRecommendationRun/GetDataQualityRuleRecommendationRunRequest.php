<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityRuleRecommendationRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RunId
 */
class GetDataQualityRuleRecommendationRunRequest extends Request
{
    /**
     * @param array{RunId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
