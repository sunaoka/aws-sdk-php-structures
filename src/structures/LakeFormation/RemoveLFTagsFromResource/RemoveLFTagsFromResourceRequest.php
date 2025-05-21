<?php

namespace Sunaoka\Aws\Structures\LakeFormation\RemoveLFTagsFromResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property Shapes\ResourceShape $Resource
 * @property list<Shapes\LFTagPair> $LFTags
 */
class RemoveLFTagsFromResourceRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     Resource: Shapes\ResourceShape,
     *     LFTags: list<Shapes\LFTagPair>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
