<?php

namespace Sunaoka\Aws\Structures\DataZone\AcceptSubscriptionRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string|null $decisionComment
 * @property list<Shapes\AcceptedAssetScope>|null $assetScopes
 * @property list<Shapes\AssetPermission>|null $assetPermissions
 */
class AcceptSubscriptionRequestRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     decisionComment?: string|null,
     *     assetScopes?: list<Shapes\AcceptedAssetScope>|null,
     *     assetPermissions?: list<Shapes\AssetPermission>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
