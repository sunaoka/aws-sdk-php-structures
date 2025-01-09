<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateFieldLevelEncryptionProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<string> $Items
 */
class FieldPatterns extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
