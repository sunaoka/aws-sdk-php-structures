<?php

namespace Sunaoka\Aws\Structures\LakeFormation\SearchTablesByLFTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property string|null $Name
 * @property TableWildcard|null $TableWildcard
 */
class TableResource extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     Name?: string|null,
     *     TableWildcard?: TableWildcard|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
