<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\DeleteDevEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $id
 */
class DeleteDevEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName: string,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
