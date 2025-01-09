<?php

namespace Sunaoka\Aws\Structures\Waf\DeleteByteMatchSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ByteMatchSetId
 * @property string $ChangeToken
 */
class DeleteByteMatchSetRequest extends Request
{
    /**
     * @param array{
     *     ByteMatchSetId: string,
     *     ChangeToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
