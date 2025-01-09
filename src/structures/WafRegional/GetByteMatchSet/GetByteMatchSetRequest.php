<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetByteMatchSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ByteMatchSetId
 */
class GetByteMatchSetRequest extends Request
{
    /**
     * @param array{ByteMatchSetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
