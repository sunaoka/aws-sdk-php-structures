<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\DeleteProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $name
 */
class DeleteProjectRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
