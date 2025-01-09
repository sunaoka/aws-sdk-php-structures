<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteThemeForStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 */
class DeleteThemeForStackRequest extends Request
{
    /**
     * @param array{StackName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
