<?php

namespace Sunaoka\Aws\Structures\Artifact\GetReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $reportId
 * @property int $reportVersion
 * @property string $termToken
 */
class GetReportRequest extends Request
{
    /**
     * @param array{
     *     reportId: string,
     *     reportVersion?: int,
     *     termToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
