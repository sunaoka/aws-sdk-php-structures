<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DeleteLFTag;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $TagKey
 */
class DeleteLFTagRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     TagKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
