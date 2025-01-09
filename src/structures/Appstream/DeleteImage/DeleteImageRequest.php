<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteImageRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
