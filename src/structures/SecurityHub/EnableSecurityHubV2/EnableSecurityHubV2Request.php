<?php

namespace Sunaoka\Aws\Structures\SecurityHub\EnableSecurityHubV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $Tags
 */
class EnableSecurityHubV2Request extends Request
{
    /**
     * @param array{Tags?: array<string, string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
