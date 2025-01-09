<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AssetTargetNameMap> $assetTargetNames
 * @property string $clientToken
 * @property string $domainIdentifier
 * @property string $environmentIdentifier
 * @property Shapes\GrantedEntityInput $grantedEntity
 * @property string $subscriptionTargetIdentifier
 */
class CreateSubscriptionGrantRequest extends Request
{
    /**
     * @param array{
     *     assetTargetNames?: list<Shapes\AssetTargetNameMap>,
     *     clientToken?: string,
     *     domainIdentifier: string,
     *     environmentIdentifier: string,
     *     grantedEntity: Shapes\GrantedEntityInput,
     *     subscriptionTargetIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
