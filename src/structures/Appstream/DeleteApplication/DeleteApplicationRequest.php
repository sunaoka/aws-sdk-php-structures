<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteApplicationRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
