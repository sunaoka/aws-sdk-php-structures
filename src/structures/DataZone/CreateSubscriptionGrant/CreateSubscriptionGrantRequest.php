<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $environmentIdentifier
 * @property string|null $subscriptionTargetIdentifier
 * @property Shapes\GrantedEntityInput $grantedEntity
 * @property list<Shapes\AssetTargetNameMap>|null $assetTargetNames
 * @property string|null $clientToken
 */
class CreateSubscriptionGrantRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     environmentIdentifier: string,
     *     subscriptionTargetIdentifier?: string|null,
     *     grantedEntity: Shapes\GrantedEntityInput,
     *     assetTargetNames?: list<Shapes\AssetTargetNameMap>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
