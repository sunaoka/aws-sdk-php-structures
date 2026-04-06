<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CancelDomainConfigChange\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PropertyName
 * @property string|null $CancelledValue
 * @property string|null $ActiveValue
 */
class CancelledChangeProperty extends Shape
{
    /**
     * @param array{
     *     PropertyName?: string|null,
     *     CancelledValue?: string|null,
     *     ActiveValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
