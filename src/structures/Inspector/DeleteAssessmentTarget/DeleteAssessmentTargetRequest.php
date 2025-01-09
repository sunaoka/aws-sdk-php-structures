<?php

namespace Sunaoka\Aws\Structures\Inspector\DeleteAssessmentTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentTargetArn
 */
class DeleteAssessmentTargetRequest extends Request
{
    /**
     * @param array{assessmentTargetArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
