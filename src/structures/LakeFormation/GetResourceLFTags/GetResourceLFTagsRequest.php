<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetResourceLFTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property Shapes\ResourceShape $Resource
 * @property bool|null $ShowAssignedLFTags
 */
class GetResourceLFTagsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     Resource: Shapes\ResourceShape,
     *     ShowAssignedLFTags?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
