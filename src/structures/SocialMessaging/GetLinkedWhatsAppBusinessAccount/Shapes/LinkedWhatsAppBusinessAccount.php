<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetLinkedWhatsAppBusinessAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property string $wabaId
 * @property 'COMPLETE'|'INCOMPLETE' $registrationStatus
 * @property \Aws\Api\DateTimeResult $linkDate
 * @property string $wabaName
 * @property list<WhatsAppBusinessAccountEventDestination> $eventDestinations
 * @property list<WhatsAppPhoneNumberSummary> $phoneNumbers
 */
class LinkedWhatsAppBusinessAccount extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     id: string,
     *     wabaId: string,
     *     registrationStatus: 'COMPLETE'|'INCOMPLETE',
     *     linkDate: \Aws\Api\DateTimeResult,
     *     wabaName: string,
     *     eventDestinations: list<WhatsAppBusinessAccountEventDestination>,
     *     phoneNumbers: list<WhatsAppPhoneNumberSummary>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
