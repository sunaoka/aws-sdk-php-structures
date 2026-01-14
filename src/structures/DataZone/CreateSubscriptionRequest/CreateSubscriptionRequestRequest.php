<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property list<Shapes\SubscribedPrincipalInput> $subscribedPrincipals
 * @property list<Shapes\SubscribedListingInput> $subscribedListings
 * @property string $requestReason
 * @property string|null $clientToken
 * @property list<Shapes\FormInput>|null $metadataForms
 * @property list<Shapes\AssetPermission>|null $assetPermissions
 * @property list<Shapes\AcceptedAssetScope>|null $assetScopes
 */
class CreateSubscriptionRequestRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     subscribedPrincipals: list<Shapes\SubscribedPrincipalInput>,
     *     subscribedListings: list<Shapes\SubscribedListingInput>,
     *     requestReason: string,
     *     clientToken?: string|null,
     *     metadataForms?: list<Shapes\FormInput>|null,
     *     assetPermissions?: list<Shapes\AssetPermission>|null,
     *     assetScopes?: list<Shapes\AcceptedAssetScope>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
