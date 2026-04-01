<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GitHubResourceCapabilities|null $github
 */
class ProviderResourceCapabilities extends Shape
{
    /**
     * @param array{github?: GitHubResourceCapabilities|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
