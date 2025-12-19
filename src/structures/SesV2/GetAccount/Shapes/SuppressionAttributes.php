<?php

namespace Sunaoka\Aws\Structures\SesV2\GetAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'BOUNCE'|'COMPLAINT'>|null $SuppressedReasons
 * @property SuppressionValidationAttributes|null $ValidationAttributes
 */
class SuppressionAttributes extends Shape
{
    /**
     * @param array{
     *     SuppressedReasons?: list<'BOUNCE'|'COMPLAINT'>|null,
     *     ValidationAttributes?: SuppressionValidationAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
