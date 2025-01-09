<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\DeleteComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteComponentRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
