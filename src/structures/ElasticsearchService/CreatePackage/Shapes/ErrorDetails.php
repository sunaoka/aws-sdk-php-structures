<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CreatePackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorType
 * @property string $ErrorMessage
 */
class ErrorDetails extends Shape
{
    /**
     * @param array{
     *     ErrorType?: string,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
