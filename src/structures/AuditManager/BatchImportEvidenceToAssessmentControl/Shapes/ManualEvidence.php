<?php

namespace Sunaoka\Aws\Structures\AuditManager\BatchImportEvidenceToAssessmentControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3ResourcePath
 * @property string $textResponse
 * @property string $evidenceFileName
 */
class ManualEvidence extends Shape
{
    /**
     * @param array{
     *     s3ResourcePath?: string,
     *     textResponse?: string,
     *     evidenceFileName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
