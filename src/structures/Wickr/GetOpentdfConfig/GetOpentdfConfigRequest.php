<?php

namespace Sunaoka\Aws\Structures\Wickr\GetOpentdfConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 */
class GetOpentdfConfigRequest extends Request
{
    /**
     * @param array{networkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
