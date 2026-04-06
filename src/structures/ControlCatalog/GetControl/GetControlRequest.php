<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\GetControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ControlArn
 */
class GetControlRequest extends Request
{
    /**
     * @param array{ControlArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
