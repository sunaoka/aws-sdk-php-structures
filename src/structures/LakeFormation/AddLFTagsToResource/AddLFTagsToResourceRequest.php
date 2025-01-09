<?php

namespace Sunaoka\Aws\Structures\LakeFormation\AddLFTagsToResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property Shapes\Resource $Resource
 * @property list<Shapes\LFTagPair> $LFTags
 */
class AddLFTagsToResourceRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     Resource: Shapes\Resource,
     *     LFTags: list<Shapes\LFTagPair>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
