<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateConfigurationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'BOUNCE'|'COMPLAINT'>|null $SuppressedReasons
 * @property SuppressionValidationOptions|null $ValidationOptions
 */
class SuppressionOptions extends Shape
{
    /**
     * @param array{
     *     SuppressedReasons?: list<'BOUNCE'|'COMPLAINT'>|null,
     *     ValidationOptions?: SuppressionValidationOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
