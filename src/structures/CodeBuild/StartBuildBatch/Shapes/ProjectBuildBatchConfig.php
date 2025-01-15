<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceRole
 * @property bool|null $combineArtifacts
 * @property BatchRestrictions|null $restrictions
 * @property int|null $timeoutInMins
 * @property 'REPORT_INDIVIDUAL_BUILDS'|'REPORT_AGGREGATED_BATCH'|null $batchReportMode
 */
class ProjectBuildBatchConfig extends Shape
{
    /**
     * @param array{
     *     serviceRole?: string|null,
     *     combineArtifacts?: bool|null,
     *     restrictions?: BatchRestrictions|null,
     *     timeoutInMins?: int|null,
     *     batchReportMode?: 'REPORT_INDIVIDUAL_BUILDS'|'REPORT_AGGREGATED_BATCH'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
