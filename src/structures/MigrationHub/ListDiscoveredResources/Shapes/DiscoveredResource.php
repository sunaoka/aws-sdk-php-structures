<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ListDiscoveredResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConfigurationId
 * @property string $Description
 */
class DiscoveredResource extends Shape
{
    /**
     * @param array{
     *     ConfigurationId: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
