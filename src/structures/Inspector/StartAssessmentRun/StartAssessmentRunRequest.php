<?php

namespace Sunaoka\Aws\Structures\Inspector\StartAssessmentRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentTemplateArn
 * @property string|null $assessmentRunName
 */
class StartAssessmentRunRequest extends Request
{
    /**
     * @param array{
     *     assessmentTemplateArn: string,
     *     assessmentRunName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
