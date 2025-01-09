<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateRetriever\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $indexId
 */
class KendraIndexConfiguration extends Shape
{
    /**
     * @param array{indexId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
