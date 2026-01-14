<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $environmentIdentifier
 * @property string $name
 * @property string $type
 * @property list<Shapes\SubscriptionTargetForm> $subscriptionTargetConfig
 * @property list<string> $authorizedPrincipals
 * @property string $manageAccessRole
 * @property list<string> $applicableAssetTypes
 * @property string|null $provider
 * @property string|null $clientToken
 * @property 'AUTOMATIC'|'MANUAL'|null $subscriptionGrantCreationMode
 */
class CreateSubscriptionTargetRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     environmentIdentifier: string,
     *     name: string,
     *     type: string,
     *     subscriptionTargetConfig: list<Shapes\SubscriptionTargetForm>,
     *     authorizedPrincipals: list<string>,
     *     manageAccessRole: string,
     *     applicableAssetTypes: list<string>,
     *     provider?: string|null,
     *     clientToken?: string|null,
     *     subscriptionGrantCreationMode?: 'AUTOMATIC'|'MANUAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
