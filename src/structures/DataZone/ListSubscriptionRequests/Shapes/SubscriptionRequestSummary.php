<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptionRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $decisionComment
 * @property string $domainId
 * @property string $existingSubscriptionId
 * @property string $id
 * @property list<MetadataFormSummary> $metadataFormsSummary
 * @property string $requestReason
 * @property string $reviewerId
 * @property 'PENDING'|'ACCEPTED'|'REJECTED' $status
 * @property list<SubscribedListing> $subscribedListings
 * @property list<SubscribedPrincipal> $subscribedPrincipals
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 */
class SubscriptionRequestSummary extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     decisionComment?: string,
     *     domainId: string,
     *     existingSubscriptionId?: string,
     *     id: string,
     *     metadataFormsSummary?: list<MetadataFormSummary>,
     *     requestReason: string,
     *     reviewerId?: string,
     *     status: 'PENDING'|'ACCEPTED'|'REJECTED',
     *     subscribedListings: list<SubscribedListing>,
     *     subscribedPrincipals: list<SubscribedPrincipal>,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     updatedBy?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
