<?php

namespace Sunaoka\Aws\Structures\Inspector\DeleteAssessmentRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentRunArn
 */
class DeleteAssessmentRunRequest extends Request
{
    /**
     * @param array{assessmentRunArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
