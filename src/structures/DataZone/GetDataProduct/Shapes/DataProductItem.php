<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDataProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $glossaryTerms
 * @property string $identifier
 * @property 'ASSET' $itemType
 * @property string $revision
 */
class DataProductItem extends Shape
{
    /**
     * @param array{
     *     glossaryTerms?: list<string>,
     *     identifier: string,
     *     itemType: 'ASSET',
     *     revision?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
