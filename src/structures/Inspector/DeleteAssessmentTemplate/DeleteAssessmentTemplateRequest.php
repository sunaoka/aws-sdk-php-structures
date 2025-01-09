<?php

namespace Sunaoka\Aws\Structures\Inspector\DeleteAssessmentTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentTemplateArn
 */
class DeleteAssessmentTemplateRequest extends Request
{
    /**
     * @param array{assessmentTemplateArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
