<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetAutoMergingPreview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property Shapes\Consolidation $Consolidation
 * @property Shapes\ConflictResolution $ConflictResolution
 * @property double $MinAllowedConfidenceScoreForMerging
 */
class GetAutoMergingPreviewRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Consolidation: Shapes\Consolidation,
     *     ConflictResolution: Shapes\ConflictResolution,
     *     MinAllowedConfidenceScoreForMerging?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
