<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetProspectingFromEngagementTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EngagementIdentifier
 * @property string|null $EngagementContextId
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $Status
 * @property string|null $ReasonCode
 * @property string|null $Message
 */
class EngagementProspectingResult extends Shape
{
    /**
     * @param array{
     *     EngagementIdentifier: string,
     *     EngagementContextId?: string|null,
     *     Status: 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     ReasonCode?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
