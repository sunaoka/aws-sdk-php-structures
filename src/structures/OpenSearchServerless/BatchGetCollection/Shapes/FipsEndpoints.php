<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $collectionEndpoint
 * @property string|null $dashboardEndpoint
 */
class FipsEndpoints extends Shape
{
    /**
     * @param array{
     *     collectionEndpoint?: string|null,
     *     dashboardEndpoint?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
