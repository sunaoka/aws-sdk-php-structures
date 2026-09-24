<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateCodeReview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $title
 * @property string $agentSpaceId
 * @property Shapes\Assets $assets
 * @property string|null $serviceRole
 * @property Shapes\CloudWatchLog|null $logConfig
 * @property 'AUTOMATIC'|'DISABLED'|null $codeRemediationStrategy
 * @property 'DISABLED'|'SIMULATED'|null $validationMode
 * @property double|null $maxTaskHours
 * @property Shapes\ReportDestination|null $reportDestination
 * @property Shapes\ReportFilters|null $reportFilters
 */
class CreateCodeReviewRequest extends Request
{
    /**
     * @param array{
     *     title: string,
     *     agentSpaceId: string,
     *     assets: Shapes\Assets,
     *     serviceRole?: string|null,
     *     logConfig?: Shapes\CloudWatchLog|null,
     *     codeRemediationStrategy?: 'AUTOMATIC'|'DISABLED'|null,
     *     validationMode?: 'DISABLED'|'SIMULATED'|null,
     *     maxTaskHours?: double|null,
     *     reportDestination?: Shapes\ReportDestination|null,
     *     reportFilters?: Shapes\ReportFilters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
