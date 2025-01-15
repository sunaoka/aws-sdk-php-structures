<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDataProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $glossaryTerms
 * @property string $identifier
 * @property 'ASSET' $itemType
 * @property string|null $revision
 */
class DataProductItem extends Shape
{
    /**
     * @param array{
     *     glossaryTerms?: list<string>|null,
     *     identifier: string,
     *     itemType: 'ASSET',
     *     revision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
