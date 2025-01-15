<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateLFTag;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $TagKey
 * @property list<string>|null $TagValuesToDelete
 * @property list<string>|null $TagValuesToAdd
 */
class UpdateLFTagRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     TagKey: string,
     *     TagValuesToDelete?: list<string>|null,
     *     TagValuesToAdd?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
