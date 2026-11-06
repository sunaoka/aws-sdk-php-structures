<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TargetVersion
 * @property string|null $SourceVersion
 * @property 'OBSERVING'|'UPGRADING'|'UPGRADE_SUCCEEDED'|'UPGRADE_FAILED'|'STOPPED'|'WAITING_FOR_CONSENT'|null $Status
 * @property string|null $AnalysisId
 */
class AutoUpgradeMetadata extends Shape
{
    /**
     * @param array{
     *     TargetVersion?: string|null,
     *     SourceVersion?: string|null,
     *     Status?: 'OBSERVING'|'UPGRADING'|'UPGRADE_SUCCEEDED'|'UPGRADE_FAILED'|'STOPPED'|'WAITING_FOR_CONSENT'|null,
     *     AnalysisId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
