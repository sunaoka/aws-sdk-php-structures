<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $AnalysisId
 * @property int<7, 30>|null $RecoveryWindowInDays
 * @property bool|null $ForceDeleteWithoutRecovery
 */
class DeleteAnalysisRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AnalysisId: string,
     *     RecoveryWindowInDays?: int<7, 30>|null,
     *     ForceDeleteWithoutRecovery?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
