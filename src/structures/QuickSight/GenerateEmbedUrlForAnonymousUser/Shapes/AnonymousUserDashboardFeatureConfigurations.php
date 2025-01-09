<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForAnonymousUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SharedViewConfigurations $SharedView
 */
class AnonymousUserDashboardFeatureConfigurations extends Shape
{
    /**
     * @param array{SharedView?: SharedViewConfigurations} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
