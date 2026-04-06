<?php

namespace Sunaoka\Aws\Structures\CodeStar\DeleteProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $clientRequestToken
 * @property bool|null $deleteStack
 */
class DeleteProjectRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     clientRequestToken?: string|null,
     *     deleteStack?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
