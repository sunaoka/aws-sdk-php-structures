<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StopBuild;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class StopBuildRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
