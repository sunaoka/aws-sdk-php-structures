<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ReturnIntent'|'CodeHook' $type
 * @property CodeHook $codeHook
 */
class FulfillmentActivity extends Shape
{
    /**
     * @param array{
     *     type: 'ReturnIntent'|'CodeHook',
     *     codeHook?: CodeHook
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
