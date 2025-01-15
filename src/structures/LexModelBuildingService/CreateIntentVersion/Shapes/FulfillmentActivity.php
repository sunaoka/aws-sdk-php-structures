<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\CreateIntentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ReturnIntent'|'CodeHook' $type
 * @property CodeHook|null $codeHook
 */
class FulfillmentActivity extends Shape
{
    /**
     * @param array{
     *     type: 'ReturnIntent'|'CodeHook',
     *     codeHook?: CodeHook|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
