<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateSubscriptionTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $applicableAssetTypes
 * @property list<string>|null $authorizedPrincipals
 * @property string $domainIdentifier
 * @property string $environmentIdentifier
 * @property string $identifier
 * @property string|null $manageAccessRole
 * @property string|null $name
 * @property string|null $provider
 * @property list<Shapes\SubscriptionTargetForm>|null $subscriptionTargetConfig
 */
class UpdateSubscriptionTargetRequest extends Request
{
    /**
     * @param array{
     *     applicableAssetTypes?: list<string>|null,
     *     authorizedPrincipals?: list<string>|null,
     *     domainIdentifier: string,
     *     environmentIdentifier: string,
     *     identifier: string,
     *     manageAccessRole?: string|null,
     *     name?: string|null,
     *     provider?: string|null,
     *     subscriptionTargetConfig?: list<Shapes\SubscriptionTargetForm>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
