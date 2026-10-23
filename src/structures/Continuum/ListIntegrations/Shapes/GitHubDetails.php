<?php

namespace Sunaoka\Aws\Structures\Continuum\ListIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $organizationName
 */
class GitHubDetails extends Shape
{
    /**
     * @param array{organizationName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
