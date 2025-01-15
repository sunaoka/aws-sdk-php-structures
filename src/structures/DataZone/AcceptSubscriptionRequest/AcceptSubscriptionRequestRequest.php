<?php

namespace Sunaoka\Aws\Structures\DataZone\AcceptSubscriptionRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AcceptedAssetScope>|null $assetScopes
 * @property string|null $decisionComment
 * @property string $domainIdentifier
 * @property string $identifier
 */
class AcceptSubscriptionRequestRequest extends Request
{
    /**
     * @param array{
     *     assetScopes?: list<Shapes\AcceptedAssetScope>|null,
     *     decisionComment?: string|null,
     *     domainIdentifier: string,
     *     identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
