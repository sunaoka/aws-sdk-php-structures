<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $applicableAssetTypes
 * @property list<string> $authorizedPrincipals
 * @property string|null $clientToken
 * @property string $domainIdentifier
 * @property string $environmentIdentifier
 * @property string $manageAccessRole
 * @property string $name
 * @property string|null $provider
 * @property list<Shapes\SubscriptionTargetForm> $subscriptionTargetConfig
 * @property string $type
 */
class CreateSubscriptionTargetRequest extends Request
{
    /**
     * @param array{
     *     applicableAssetTypes: list<string>,
     *     authorizedPrincipals: list<string>,
     *     clientToken?: string|null,
     *     domainIdentifier: string,
     *     environmentIdentifier: string,
     *     manageAccessRole: string,
     *     name: string,
     *     provider?: string|null,
     *     subscriptionTargetConfig: list<Shapes\SubscriptionTargetForm>,
     *     type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
