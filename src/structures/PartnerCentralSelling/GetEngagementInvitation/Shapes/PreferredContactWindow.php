<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagementInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MORNING'|'AFTERNOON'|'EVENING'|null $Window
 * @property string|null $Timezone
 */
class PreferredContactWindow extends Shape
{
    /**
     * @param array{
     *     Window?: 'MORNING'|'AFTERNOON'|'EVENING'|null,
     *     Timezone?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
