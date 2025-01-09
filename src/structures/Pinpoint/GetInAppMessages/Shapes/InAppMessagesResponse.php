<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetInAppMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InAppMessageCampaign> $InAppMessageCampaigns
 */
class InAppMessagesResponse extends Shape
{
    /**
     * @param array{InAppMessageCampaigns?: list<InAppMessageCampaign>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
