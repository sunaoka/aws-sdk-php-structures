<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ExportMetadataModelAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MigrationProjectIdentifier
 * @property string $SelectionRules
 * @property string $FileName
 * @property list<'pdf'|'csv'> $AssessmentReportTypes
 */
class ExportMetadataModelAssessmentRequest extends Request
{
    /**
     * @param array{
     *     MigrationProjectIdentifier: string,
     *     SelectionRules: string,
     *     FileName?: string,
     *     AssessmentReportTypes?: list<'pdf'|'csv'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
