<?php

namespace Sunaoka\Aws\Structures\CodeStar\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $id
 * @property string|null $description
 * @property string|null $clientRequestToken
 * @property list<Shapes\Code>|null $sourceCode
 * @property Shapes\Toolchain|null $toolchain
 * @property array<string, string>|null $tags
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     id: string,
     *     description?: string|null,
     *     clientRequestToken?: string|null,
     *     sourceCode?: list<Shapes\Code>|null,
     *     toolchain?: Shapes\Toolchain|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
