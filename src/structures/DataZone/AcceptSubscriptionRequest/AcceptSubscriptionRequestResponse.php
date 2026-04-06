<?php

namespace Sunaoka\Aws\Structures\DataZone\AcceptSubscriptionRequest;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string|null $decisionComment
 * @property string $domainId
 * @property string|null $existingSubscriptionId
 * @property string $id
 * @property list<Shapes\FormOutput>|null $metadataForms
 * @property string $requestReason
 * @property string|null $reviewerId
 * @property 'PENDING'|'ACCEPTED'|'REJECTED' $status
 * @property list<Shapes\SubscribedListing> $subscribedListings
 * @property list<Shapes\SubscribedPrincipal> $subscribedPrincipals
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $updatedBy
 */
class AcceptSubscriptionRequestResponse extends Response
{
}
