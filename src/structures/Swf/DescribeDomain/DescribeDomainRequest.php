<?php

namespace Sunaoka\Aws\Structures\Swf\DescribeDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DescribeDomainRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
