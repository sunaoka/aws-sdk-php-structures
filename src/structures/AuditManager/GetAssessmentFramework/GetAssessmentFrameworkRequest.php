<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetAssessmentFramework;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $frameworkId
 */
class GetAssessmentFrameworkRequest extends Request
{
    /**
     * @param array{frameworkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
