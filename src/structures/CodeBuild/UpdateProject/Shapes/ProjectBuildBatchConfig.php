<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceRole
 * @property bool $combineArtifacts
 * @property BatchRestrictions $restrictions
 * @property int $timeoutInMins
 * @property 'REPORT_INDIVIDUAL_BUILDS'|'REPORT_AGGREGATED_BATCH' $batchReportMode
 */
class ProjectBuildBatchConfig extends Shape
{
    /**
     * @param array{
     *     serviceRole?: string,
     *     combineArtifacts?: bool,
     *     restrictions?: BatchRestrictions,
     *     timeoutInMins?: int,
     *     batchReportMode?: 'REPORT_INDIVIDUAL_BUILDS'|'REPORT_AGGREGATED_BATCH'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
