<?php

namespace Sunaoka\Aws\Structures\AuditManager\BatchImportEvidenceToAssessmentControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $s3ResourcePath
 * @property string|null $textResponse
 * @property string|null $evidenceFileName
 */
class ManualEvidence extends Shape
{
    /**
     * @param array{
     *     s3ResourcePath?: string|null,
     *     textResponse?: string|null,
     *     evidenceFileName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
