<?php

namespace Sunaoka\Aws\Structures\DataZone\GetSubscriptionRequestDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $entityId
 * @property string|null $entityRevision
 * @property string|null $entityType
 * @property string|null $forms
 * @property list<DetailedGlossaryTerm>|null $glossaryTerms
 * @property AssetScope|null $assetScope
 * @property Permissions|null $permissions
 */
class SubscribedAssetListing extends Shape
{
    /**
     * @param array{
     *     entityId?: string|null,
     *     entityRevision?: string|null,
     *     entityType?: string|null,
     *     forms?: string|null,
     *     glossaryTerms?: list<DetailedGlossaryTerm>|null,
     *     assetScope?: AssetScope|null,
     *     permissions?: Permissions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
