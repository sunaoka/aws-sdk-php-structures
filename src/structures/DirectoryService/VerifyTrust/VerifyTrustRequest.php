<?php

namespace Sunaoka\Aws\Structures\DirectoryService\VerifyTrust;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrustId
 */
class VerifyTrustRequest extends Request
{
    /**
     * @param array{TrustId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
