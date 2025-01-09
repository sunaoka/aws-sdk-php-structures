<?php

namespace Sunaoka\Aws\Structures\PersonalizeEvents\PutActionInteractions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trackingId
 * @property list<Shapes\ActionInteraction> $actionInteractions
 */
class PutActionInteractionsRequest extends Request
{
    /**
     * @param array{
     *     trackingId: string,
     *     actionInteractions: list<Shapes\ActionInteraction>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
