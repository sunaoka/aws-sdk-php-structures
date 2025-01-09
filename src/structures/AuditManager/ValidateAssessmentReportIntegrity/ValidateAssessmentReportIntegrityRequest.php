<?php

namespace Sunaoka\Aws\Structures\AuditManager\ValidateAssessmentReportIntegrity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $s3RelativePath
 */
class ValidateAssessmentReportIntegrityRequest extends Request
{
    /**
     * @param array{s3RelativePath: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
