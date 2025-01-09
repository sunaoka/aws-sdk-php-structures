<?php

namespace Sunaoka\Aws\Structures\DataZone\RejectSubscriptionRequest;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $decisionComment
 * @property string $domainId
 * @property string $existingSubscriptionId
 * @property string $id
 * @property list<Shapes\FormOutput> $metadataForms
 * @property string $requestReason
 * @property string $reviewerId
 * @property 'PENDING'|'ACCEPTED'|'REJECTED' $status
 * @property list<Shapes\SubscribedListing> $subscribedListings
 * @property list<Shapes\SubscribedPrincipal> $subscribedPrincipals
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 */
class RejectSubscriptionRequestResponse extends Response
{
}
