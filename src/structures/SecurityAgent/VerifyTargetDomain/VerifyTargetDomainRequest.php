<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\VerifyTargetDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $targetDomainId
 */
class VerifyTargetDomainRequest extends Request
{
    /**
     * @param array{targetDomainId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
