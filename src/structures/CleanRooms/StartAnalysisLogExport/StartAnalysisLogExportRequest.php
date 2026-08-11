<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartAnalysisLogExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $analysisId
 * @property 'PROTECTED_QUERY' $analysisType
 * @property Shapes\AnalysisLogExportResultConfiguration $resultConfiguration
 */
class StartAnalysisLogExportRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     analysisId: string,
     *     analysisType: 'PROTECTED_QUERY',
     *     resultConfiguration: Shapes\AnalysisLogExportResultConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
