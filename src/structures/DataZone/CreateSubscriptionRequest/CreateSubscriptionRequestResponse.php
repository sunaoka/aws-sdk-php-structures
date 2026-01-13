<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionRequest;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $createdBy
 * @property string|null $updatedBy
 * @property string $domainId
 * @property 'PENDING'|'ACCEPTED'|'REJECTED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $requestReason
 * @property list<Shapes\SubscribedPrincipal> $subscribedPrincipals
 * @property list<Shapes\SubscribedListing> $subscribedListings
 * @property string|null $reviewerId
 * @property string|null $decisionComment
 * @property string|null $existingSubscriptionId
 * @property list<Shapes\FormOutput>|null $metadataForms
 */
class CreateSubscriptionRequestResponse extends Response
{
}
