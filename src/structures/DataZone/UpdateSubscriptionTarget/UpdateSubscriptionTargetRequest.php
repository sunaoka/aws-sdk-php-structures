<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateSubscriptionTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $environmentIdentifier
 * @property string $identifier
 * @property string|null $name
 * @property list<string>|null $authorizedPrincipals
 * @property list<string>|null $applicableAssetTypes
 * @property list<Shapes\SubscriptionTargetForm>|null $subscriptionTargetConfig
 * @property string|null $manageAccessRole
 * @property string|null $provider
 * @property 'AUTOMATIC'|'MANUAL'|null $subscriptionGrantCreationMode
 */
class UpdateSubscriptionTargetRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     environmentIdentifier: string,
     *     identifier: string,
     *     name?: string|null,
     *     authorizedPrincipals?: list<string>|null,
     *     applicableAssetTypes?: list<string>|null,
     *     subscriptionTargetConfig?: list<Shapes\SubscriptionTargetForm>|null,
     *     manageAccessRole?: string|null,
     *     provider?: string|null,
     *     subscriptionGrantCreationMode?: 'AUTOMATIC'|'MANUAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
