<?php

namespace Sunaoka\Aws\Structures\Waf\UpdateByteMatchSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ByteMatchSetId
 * @property string $ChangeToken
 * @property list<Shapes\ByteMatchSetUpdate> $Updates
 */
class UpdateByteMatchSetRequest extends Request
{
    /**
     * @param array{
     *     ByteMatchSetId: string,
     *     ChangeToken: string,
     *     Updates: list<Shapes\ByteMatchSetUpdate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
