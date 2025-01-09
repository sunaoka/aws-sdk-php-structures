<?php

namespace Sunaoka\Aws\Structures\AuditManager\DeleteAssessmentFramework;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $frameworkId
 */
class DeleteAssessmentFrameworkRequest extends Request
{
    /**
     * @param array{frameworkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
