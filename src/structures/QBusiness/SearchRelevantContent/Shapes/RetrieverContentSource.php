<?php

namespace Sunaoka\Aws\Structures\QBusiness\SearchRelevantContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $retrieverId
 */
class RetrieverContentSource extends Shape
{
    /**
     * @param array{retrieverId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
