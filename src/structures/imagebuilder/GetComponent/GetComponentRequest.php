<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $componentBuildVersionArn
 */
class GetComponentRequest extends Request
{
    /**
     * @param array{componentBuildVersionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
