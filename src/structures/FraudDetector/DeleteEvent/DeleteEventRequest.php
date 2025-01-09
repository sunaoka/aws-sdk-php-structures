<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $eventId
 * @property string $eventTypeName
 * @property bool $deleteAuditHistory
 */
class DeleteEventRequest extends Request
{
    /**
     * @param array{
     *     eventId: string,
     *     eventTypeName: string,
     *     deleteAuditHistory?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
