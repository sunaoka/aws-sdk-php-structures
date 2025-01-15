<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\CreateDataIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Folders
 * @property array<string, list<string>>|null $Filters
 */
class FileConfiguration extends Shape
{
    /**
     * @param array{
     *     Folders: list<string>,
     *     Filters?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
