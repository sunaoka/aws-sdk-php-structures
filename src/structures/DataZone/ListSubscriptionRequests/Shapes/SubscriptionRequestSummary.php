<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptionRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $createdBy
 * @property string|null $updatedBy
 * @property string $domainId
 * @property 'PENDING'|'ACCEPTED'|'REJECTED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $requestReason
 * @property list<SubscribedPrincipal> $subscribedPrincipals
 * @property list<SubscribedListing> $subscribedListings
 * @property string|null $reviewerId
 * @property string|null $decisionComment
 * @property string|null $existingSubscriptionId
 * @property list<MetadataFormSummary>|null $metadataFormsSummary
 */
class SubscriptionRequestSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     createdBy: string,
     *     updatedBy?: string|null,
     *     domainId: string,
     *     status: 'PENDING'|'ACCEPTED'|'REJECTED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     requestReason: string,
     *     subscribedPrincipals: list<SubscribedPrincipal>,
     *     subscribedListings: list<SubscribedListing>,
     *     reviewerId?: string|null,
     *     decisionComment?: string|null,
     *     existingSubscriptionId?: string|null,
     *     metadataFormsSummary?: list<MetadataFormSummary>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
