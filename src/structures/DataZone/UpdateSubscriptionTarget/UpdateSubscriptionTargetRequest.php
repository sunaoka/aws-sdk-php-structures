<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateSubscriptionTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $applicableAssetTypes
 * @property list<string> $authorizedPrincipals
 * @property string $domainIdentifier
 * @property string $environmentIdentifier
 * @property string $identifier
 * @property string $manageAccessRole
 * @property string $name
 * @property string $provider
 * @property list<Shapes\SubscriptionTargetForm> $subscriptionTargetConfig
 */
class UpdateSubscriptionTargetRequest extends Request
{
    /**
     * @param array{
     *     applicableAssetTypes?: list<string>,
     *     authorizedPrincipals?: list<string>,
     *     domainIdentifier: string,
     *     environmentIdentifier: string,
     *     identifier: string,
     *     manageAccessRole?: string,
     *     name?: string,
     *     provider?: string,
     *     subscriptionTargetConfig?: list<Shapes\SubscriptionTargetForm>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
