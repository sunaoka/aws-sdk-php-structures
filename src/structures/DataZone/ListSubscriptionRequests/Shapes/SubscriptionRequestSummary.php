<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptionRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string|null $decisionComment
 * @property string $domainId
 * @property string|null $existingSubscriptionId
 * @property string $id
 * @property list<MetadataFormSummary>|null $metadataFormsSummary
 * @property string $requestReason
 * @property string|null $reviewerId
 * @property 'PENDING'|'ACCEPTED'|'REJECTED' $status
 * @property list<SubscribedListing> $subscribedListings
 * @property list<SubscribedPrincipal> $subscribedPrincipals
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $updatedBy
 */
class SubscriptionRequestSummary extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     decisionComment?: string|null,
     *     domainId: string,
     *     existingSubscriptionId?: string|null,
     *     id: string,
     *     metadataFormsSummary?: list<MetadataFormSummary>|null,
     *     requestReason: string,
     *     reviewerId?: string|null,
     *     status: 'PENDING'|'ACCEPTED'|'REJECTED',
     *     subscribedListings: list<SubscribedListing>,
     *     subscribedPrincipals: list<SubscribedPrincipal>,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     updatedBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
