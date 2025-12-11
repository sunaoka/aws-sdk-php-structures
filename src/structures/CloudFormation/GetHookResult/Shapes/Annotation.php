<?php

namespace Sunaoka\Aws\Structures\CloudFormation\GetHookResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AnnotationName
 * @property 'PASSED'|'FAILED'|'SKIPPED'|null $Status
 * @property string|null $StatusMessage
 * @property string|null $RemediationMessage
 * @property string|null $RemediationLink
 * @property 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null $SeverityLevel
 */
class Annotation extends Shape
{
    /**
     * @param array{
     *     AnnotationName?: string|null,
     *     Status?: 'PASSED'|'FAILED'|'SKIPPED'|null,
     *     StatusMessage?: string|null,
     *     RemediationMessage?: string|null,
     *     RemediationLink?: string|null,
     *     SeverityLevel?: 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
