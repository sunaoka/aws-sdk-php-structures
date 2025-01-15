<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateRetriever\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NativeIndexConfiguration|null $nativeIndexConfiguration
 * @property KendraIndexConfiguration|null $kendraIndexConfiguration
 */
class RetrieverConfiguration extends Shape
{
    /**
     * @param array{
     *     nativeIndexConfiguration?: NativeIndexConfiguration|null,
     *     kendraIndexConfiguration?: KendraIndexConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
