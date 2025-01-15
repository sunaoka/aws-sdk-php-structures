<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property Consolidation|null $Consolidation
 * @property ConflictResolution|null $ConflictResolution
 * @property double|null $MinAllowedConfidenceScoreForMerging
 */
class AutoMerging extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     Consolidation?: Consolidation|null,
     *     ConflictResolution?: ConflictResolution|null,
     *     MinAllowedConfidenceScoreForMerging?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
