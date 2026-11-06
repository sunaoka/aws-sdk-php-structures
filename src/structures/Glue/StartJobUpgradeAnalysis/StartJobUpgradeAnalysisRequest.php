<?php

namespace Sunaoka\Aws\Structures\Glue\StartJobUpgradeAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string|null $analysisId
 * @property 'APPROVE'|'DECLINE'|null $upgradeConsent
 */
class StartJobUpgradeAnalysisRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     analysisId?: string|null,
     *     upgradeConsent?: 'APPROVE'|'DECLINE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
