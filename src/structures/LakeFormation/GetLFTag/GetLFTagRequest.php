<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetLFTag;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $TagKey
 */
class GetLFTagRequest extends Request
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
