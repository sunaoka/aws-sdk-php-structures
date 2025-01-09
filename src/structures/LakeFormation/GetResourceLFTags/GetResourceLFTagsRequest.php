<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetResourceLFTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property Shapes\Resource $Resource
 * @property bool $ShowAssignedLFTags
 */
class GetResourceLFTagsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     Resource: Shapes\Resource,
     *     ShowAssignedLFTags?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
