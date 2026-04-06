<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $domainIdentifier
 * @property string $requestReason
 * @property list<Shapes\SubscribedListingInput> $subscribedListings
 * @property list<Shapes\SubscribedPrincipalInput> $subscribedPrincipals
 */
class CreateSubscriptionRequestRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     domainIdentifier: string,
     *     requestReason: string,
     *     subscribedListings: list<Shapes\SubscribedListingInput>,
     *     subscribedPrincipals: list<Shapes\SubscribedPrincipalInput>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
