<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetAnalysisLogExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $analysisLogExportIdentifier
 */
class GetAnalysisLogExportRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     analysisLogExportIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
