<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetIPSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IPSetId
 */
class GetIPSetRequest extends Request
{
    /**
     * @param array{IPSetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
