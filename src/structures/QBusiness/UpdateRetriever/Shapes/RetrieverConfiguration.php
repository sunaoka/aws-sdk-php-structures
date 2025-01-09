<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateRetriever\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NativeIndexConfiguration $nativeIndexConfiguration
 * @property KendraIndexConfiguration $kendraIndexConfiguration
 */
class RetrieverConfiguration extends Shape
{
    /**
     * @param array{
     *     nativeIndexConfiguration?: NativeIndexConfiguration,
     *     kendraIndexConfiguration?: KendraIndexConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
