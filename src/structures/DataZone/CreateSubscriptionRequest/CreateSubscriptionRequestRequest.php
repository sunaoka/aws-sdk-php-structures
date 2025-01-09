<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $domainIdentifier
 * @property list<Shapes\FormInput> $metadataForms
 * @property string $requestReason
 * @property list<Shapes\SubscribedListingInput> $subscribedListings
 * @property list<Shapes\SubscribedPrincipalInput> $subscribedPrincipals
 */
class CreateSubscriptionRequestRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     domainIdentifier: string,
     *     metadataForms?: list<Shapes\FormInput>,
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
