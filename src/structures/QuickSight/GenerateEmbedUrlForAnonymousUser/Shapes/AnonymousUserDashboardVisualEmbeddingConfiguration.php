<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForAnonymousUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DashboardVisualId $InitialDashboardVisualId
 */
class AnonymousUserDashboardVisualEmbeddingConfiguration extends Shape
{
    /**
     * @param array{InitialDashboardVisualId: DashboardVisualId} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
