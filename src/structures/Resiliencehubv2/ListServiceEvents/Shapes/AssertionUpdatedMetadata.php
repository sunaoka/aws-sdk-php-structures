<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListServiceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $assertionId
 * @property string|null $assertionName
 */
class AssertionUpdatedMetadata extends Shape
{
    /**
     * @param array{
     *     assertionId?: string|null,
     *     assertionName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
