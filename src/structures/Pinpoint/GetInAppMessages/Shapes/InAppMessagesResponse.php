<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetInAppMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InAppMessageCampaign>|null $InAppMessageCampaigns
 */
class InAppMessagesResponse extends Shape
{
    /**
     * @param array{InAppMessageCampaigns?: list<InAppMessageCampaign>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
