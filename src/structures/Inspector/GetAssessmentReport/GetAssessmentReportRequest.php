<?php

namespace Sunaoka\Aws\Structures\Inspector\GetAssessmentReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentRunArn
 * @property 'HTML'|'PDF' $reportFileFormat
 * @property 'FINDING'|'FULL' $reportType
 */
class GetAssessmentReportRequest extends Request
{
    /**
     * @param array{
     *     assessmentRunArn: string,
     *     reportFileFormat: 'HTML'|'PDF',
     *     reportType: 'FINDING'|'FULL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
