<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdatePackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ErrorType
 * @property string|null $ErrorMessage
 */
class ErrorDetails extends Shape
{
    /**
     * @param array{
     *     ErrorType?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
