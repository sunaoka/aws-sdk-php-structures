<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateLFTag;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $TagKey
 * @property list<string> $TagValuesToDelete
 * @property list<string> $TagValuesToAdd
 */
class UpdateLFTagRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     TagKey: string,
     *     TagValuesToDelete?: list<string>,
     *     TagValuesToAdd?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
