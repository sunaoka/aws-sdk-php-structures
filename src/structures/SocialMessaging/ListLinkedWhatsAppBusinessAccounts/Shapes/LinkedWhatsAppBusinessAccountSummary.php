<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\ListLinkedWhatsAppBusinessAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property string $wabaId
 * @property 'COMPLETE'|'INCOMPLETE' $registrationStatus
 * @property \Aws\Api\DateTimeResult $linkDate
 * @property string $wabaName
 * @property list<WhatsAppBusinessAccountEventDestination> $eventDestinations
 */
class LinkedWhatsAppBusinessAccountSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     id: string,
     *     wabaId: string,
     *     registrationStatus: 'COMPLETE'|'INCOMPLETE',
     *     linkDate: \Aws\Api\DateTimeResult,
     *     wabaName: string,
     *     eventDestinations: list<WhatsAppBusinessAccountEventDestination>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
