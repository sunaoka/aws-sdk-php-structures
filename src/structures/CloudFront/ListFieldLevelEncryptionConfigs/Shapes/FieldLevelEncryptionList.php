<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListFieldLevelEncryptionConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NextMarker
 * @property int $MaxItems
 * @property int $Quantity
 * @property list<FieldLevelEncryptionSummary> $Items
 */
class FieldLevelEncryptionList extends Shape
{
    /**
     * @param array{
     *     NextMarker?: string,
     *     MaxItems: int,
     *     Quantity: int,
     *     Items?: list<FieldLevelEncryptionSummary>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
