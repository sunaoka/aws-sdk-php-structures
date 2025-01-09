<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class GetDomainRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
