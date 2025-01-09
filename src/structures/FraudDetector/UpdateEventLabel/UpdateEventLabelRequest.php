<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateEventLabel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $eventId
 * @property string $eventTypeName
 * @property string $assignedLabel
 * @property string $labelTimestamp
 */
class UpdateEventLabelRequest extends Request
{
    /**
     * @param array{
     *     eventId: string,
     *     eventTypeName: string,
     *     assignedLabel: string,
     *     labelTimestamp: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
