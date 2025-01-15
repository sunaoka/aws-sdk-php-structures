<?php

namespace Sunaoka\Aws\Structures\Backup\StartReportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReportPlanName
 * @property string|null $IdempotencyToken
 */
class StartReportJobRequest extends Request
{
    /**
     * @param array{
     *     ReportPlanName: string,
     *     IdempotencyToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
