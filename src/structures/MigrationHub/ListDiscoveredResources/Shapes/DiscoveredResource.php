<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ListDiscoveredResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConfigurationId
 * @property string|null $Description
 */
class DiscoveredResource extends Shape
{
    /**
     * @param array{
     *     ConfigurationId: string,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
