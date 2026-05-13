<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetCodeReviews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $integrationId
 * @property string $providerResourceId
 */
class IntegratedRepository extends Shape
{
    /**
     * @param array{
     *     integrationId: string,
     *     providerResourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
