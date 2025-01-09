<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteFramework;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FrameworkName
 */
class DeleteFrameworkRequest extends Request
{
    /**
     * @param array{FrameworkName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
