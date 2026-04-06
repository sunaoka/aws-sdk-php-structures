<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\GetAnalysisReportResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Protocol
 * @property \Aws\Api\DateTimeResult|null $FirstAccessed
 * @property \Aws\Api\DateTimeResult|null $LastAccessed
 * @property string|null $Domain
 * @property Hits|null $Hits
 * @property UniqueSources|null $UniqueSources
 */
class AnalysisTypeReportResult extends Shape
{
    /**
     * @param array{
     *     Protocol?: string|null,
     *     FirstAccessed?: \Aws\Api\DateTimeResult|null,
     *     LastAccessed?: \Aws\Api\DateTimeResult|null,
     *     Domain?: string|null,
     *     Hits?: Hits|null,
     *     UniqueSources?: UniqueSources|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
