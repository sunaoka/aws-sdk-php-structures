<?php

namespace Sunaoka\Aws\Structures\imagebuilder\DeleteComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $componentBuildVersionArn
 */
class DeleteComponentRequest extends Request
{
    /**
     * @param array{componentBuildVersionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
