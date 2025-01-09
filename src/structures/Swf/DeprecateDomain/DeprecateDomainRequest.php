<?php

namespace Sunaoka\Aws\Structures\Swf\DeprecateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeprecateDomainRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
