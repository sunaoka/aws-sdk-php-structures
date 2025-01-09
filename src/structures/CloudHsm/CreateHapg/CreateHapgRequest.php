<?php

namespace Sunaoka\Aws\Structures\CloudHsm\CreateHapg;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Label
 */
class CreateHapgRequest extends Request
{
    /**
     * @param array{Label: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
