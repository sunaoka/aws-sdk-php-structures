<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DeleteProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string|null $ClientToken
 */
class DeleteProjectRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
