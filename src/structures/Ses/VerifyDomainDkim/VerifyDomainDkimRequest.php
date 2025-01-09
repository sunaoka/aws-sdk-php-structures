<?php

namespace Sunaoka\Aws\Structures\Ses\VerifyDomainDkim;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Domain
 */
class VerifyDomainDkimRequest extends Request
{
    /**
     * @param array{Domain: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
