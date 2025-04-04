<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteImageBuilder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteImageBuilderRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
