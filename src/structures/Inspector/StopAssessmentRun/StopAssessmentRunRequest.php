<?php

namespace Sunaoka\Aws\Structures\Inspector\StopAssessmentRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentRunArn
 * @property 'START_EVALUATION'|'SKIP_EVALUATION' $stopAction
 */
class StopAssessmentRunRequest extends Request
{
    /**
     * @param array{
     *     assessmentRunArn: string,
     *     stopAction?: 'START_EVALUATION'|'SKIP_EVALUATION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
