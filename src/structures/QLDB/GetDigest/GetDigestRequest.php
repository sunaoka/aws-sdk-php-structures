<?php

namespace Sunaoka\Aws\Structures\QLDB\GetDigest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class GetDigestRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
