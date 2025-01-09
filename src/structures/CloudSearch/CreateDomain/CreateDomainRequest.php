<?php

namespace Sunaoka\Aws\Structures\CloudSearch\CreateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class CreateDomainRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
