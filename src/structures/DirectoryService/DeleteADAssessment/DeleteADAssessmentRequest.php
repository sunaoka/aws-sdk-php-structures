<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DeleteADAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssessmentId
 */
class DeleteADAssessmentRequest extends Request
{
    /**
     * @param array{AssessmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
