<?php

namespace Sunaoka\Aws\Structures\Odb\InitializeService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $ociIdentityDomain
 */
class InitializeServiceRequest extends Request
{
    /**
     * @param array{ociIdentityDomain?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
