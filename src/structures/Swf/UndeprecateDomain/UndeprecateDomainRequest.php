<?php

namespace Sunaoka\Aws\Structures\Swf\UndeprecateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class UndeprecateDomainRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
