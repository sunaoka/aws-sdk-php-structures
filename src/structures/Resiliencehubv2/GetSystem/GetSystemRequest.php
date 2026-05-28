<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $systemArn
 */
class GetSystemRequest extends Request
{
    /**
     * @param array{systemArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
