<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property Consolidation $Consolidation
 * @property ConflictResolution $ConflictResolution
 * @property double $MinAllowedConfidenceScoreForMerging
 */
class AutoMerging extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     Consolidation?: Consolidation,
     *     ConflictResolution?: ConflictResolution,
     *     MinAllowedConfidenceScoreForMerging?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
