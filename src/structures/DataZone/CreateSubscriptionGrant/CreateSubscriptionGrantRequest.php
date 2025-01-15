<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AssetTargetNameMap>|null $assetTargetNames
 * @property string|null $clientToken
 * @property string $domainIdentifier
 * @property string $environmentIdentifier
 * @property Shapes\GrantedEntityInput $grantedEntity
 * @property string|null $subscriptionTargetIdentifier
 */
class CreateSubscriptionGrantRequest extends Request
{
    /**
     * @param array{
     *     assetTargetNames?: list<Shapes\AssetTargetNameMap>|null,
     *     clientToken?: string|null,
     *     domainIdentifier: string,
     *     environmentIdentifier: string,
     *     grantedEntity: Shapes\GrantedEntityInput,
     *     subscriptionTargetIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
