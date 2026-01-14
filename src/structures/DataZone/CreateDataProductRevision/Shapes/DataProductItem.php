<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataProductRevision\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASSET' $itemType
 * @property string $identifier
 * @property string|null $revision
 * @property list<string>|null $glossaryTerms
 */
class DataProductItem extends Shape
{
    /**
     * @param array{
     *     itemType: 'ASSET',
     *     identifier: string,
     *     revision?: string|null,
     *     glossaryTerms?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
