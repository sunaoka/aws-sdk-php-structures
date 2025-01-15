<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\UpdateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $name
 * @property string|null $description
 */
class UpdateProjectRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     name: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
