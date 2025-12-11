<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagementInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceType
 * @property string $SourceId
 * @property string $SourceName
 * @property string|null $Usecase
 * @property string $ContactBusinessTitle
 */
class LeadInvitationInteraction extends Shape
{
    /**
     * @param array{
     *     SourceType: string,
     *     SourceId: string,
     *     SourceName: string,
     *     Usecase?: string|null,
     *     ContactBusinessTitle: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
