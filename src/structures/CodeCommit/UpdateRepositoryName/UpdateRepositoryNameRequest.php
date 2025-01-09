<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdateRepositoryName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $oldName
 * @property string $newName
 */
class UpdateRepositoryNameRequest extends Request
{
    /**
     * @param array{
     *     oldName: string,
     *     newName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
