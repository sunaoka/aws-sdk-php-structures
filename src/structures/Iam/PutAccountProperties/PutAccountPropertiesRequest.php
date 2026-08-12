<?php

namespace Sunaoka\Aws\Structures\Iam\PutAccountProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string> $Properties
 */
class PutAccountPropertiesRequest extends Request
{
    /**
     * @param array{Properties: array<string, string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
