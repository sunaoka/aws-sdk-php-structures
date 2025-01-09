<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CancelDomainConfigChange\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PropertyName
 * @property string $CancelledValue
 * @property string $ActiveValue
 */
class CancelledChangeProperty extends Shape
{
    /**
     * @param array{
     *     PropertyName?: string,
     *     CancelledValue?: string,
     *     ActiveValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
