<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\StopAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentId
 */
class StopAssessmentRequest extends Request
{
    /**
     * @param array{assessmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
