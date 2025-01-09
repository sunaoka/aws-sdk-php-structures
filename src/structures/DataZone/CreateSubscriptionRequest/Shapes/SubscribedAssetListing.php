<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetScope $assetScope
 * @property string $entityId
 * @property string $entityRevision
 * @property string $entityType
 * @property string $forms
 * @property list<DetailedGlossaryTerm> $glossaryTerms
 */
class SubscribedAssetListing extends Shape
{
    /**
     * @param array{
     *     assetScope?: AssetScope,
     *     entityId?: string,
     *     entityRevision?: string,
     *     entityType?: string,
     *     forms?: string,
     *     glossaryTerms?: list<DetailedGlossaryTerm>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
