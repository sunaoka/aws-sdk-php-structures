<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetScope|null $assetScope
 * @property string|null $entityId
 * @property string|null $entityRevision
 * @property string|null $entityType
 * @property string|null $forms
 * @property list<DetailedGlossaryTerm>|null $glossaryTerms
 */
class SubscribedAssetListing extends Shape
{
    /**
     * @param array{
     *     assetScope?: AssetScope|null,
     *     entityId?: string|null,
     *     entityRevision?: string|null,
     *     entityType?: string|null,
     *     forms?: string|null,
     *     glossaryTerms?: list<DetailedGlossaryTerm>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
