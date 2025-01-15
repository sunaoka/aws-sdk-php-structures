<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\CreateSourceRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $name
 * @property string|null $description
 */
class CreateSourceRepositoryRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName: string,
     *     name: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
