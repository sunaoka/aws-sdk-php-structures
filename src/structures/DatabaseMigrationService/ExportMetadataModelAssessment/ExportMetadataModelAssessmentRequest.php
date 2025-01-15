<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ExportMetadataModelAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MigrationProjectIdentifier
 * @property string $SelectionRules
 * @property string|null $FileName
 * @property list<'pdf'|'csv'>|null $AssessmentReportTypes
 */
class ExportMetadataModelAssessmentRequest extends Request
{
    /**
     * @param array{
     *     MigrationProjectIdentifier: string,
     *     SelectionRules: string,
     *     FileName?: string|null,
     *     AssessmentReportTypes?: list<'pdf'|'csv'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
