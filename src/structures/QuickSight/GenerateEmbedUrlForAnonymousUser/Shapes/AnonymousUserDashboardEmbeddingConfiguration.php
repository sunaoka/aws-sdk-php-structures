<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForAnonymousUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InitialDashboardId
 */
class AnonymousUserDashboardEmbeddingConfiguration extends Shape
{
    /**
     * @param array{InitialDashboardId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
