<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagementInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceType
 * @property string|null $SourceId
 * @property string|null $SourceName
 * @property string|null $Usecase
 * @property string $ContactBusinessTitle
 */
class LeadInvitationInteraction extends Shape
{
    /**
     * @param array{
     *     SourceType?: string|null,
     *     SourceId?: string|null,
     *     SourceName?: string|null,
     *     Usecase?: string|null,
     *     ContactBusinessTitle: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
