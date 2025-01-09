<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateTestSetDiscrepancyReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testSetId
 * @property Shapes\TestSetDiscrepancyReportResourceTarget $target
 */
class CreateTestSetDiscrepancyReportRequest extends Request
{
    /**
     * @param array{
     *     testSetId: string,
     *     target: Shapes\TestSetDiscrepancyReportResourceTarget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
