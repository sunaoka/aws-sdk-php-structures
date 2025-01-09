<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $displayName
 * @property string $description
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     displayName: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
