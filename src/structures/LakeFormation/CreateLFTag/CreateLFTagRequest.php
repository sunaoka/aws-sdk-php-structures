<?php

namespace Sunaoka\Aws\Structures\LakeFormation\CreateLFTag;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $TagKey
 * @property list<string> $TagValues
 */
class CreateLFTagRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     TagKey: string,
     *     TagValues: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
