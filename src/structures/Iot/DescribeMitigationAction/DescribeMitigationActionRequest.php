<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeMitigationAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $actionName
 */
class DescribeMitigationActionRequest extends Request
{
    /**
     * @param array{actionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
