<?php

namespace Sunaoka\Aws\Structures\Inspector\StartAssessmentRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentTemplateArn
 * @property string $assessmentRunName
 */
class StartAssessmentRunRequest extends Request
{
    /**
     * @param array{
     *     assessmentTemplateArn: string,
     *     assessmentRunName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
