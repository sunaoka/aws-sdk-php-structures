<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TypedLinkSpecifier>|null $TypedLinkSpecifiers
 * @property string|null $NextToken
 */
class BatchListOutgoingTypedLinksResponse extends Shape
{
    /**
     * @param array{
     *     TypedLinkSpecifiers?: list<TypedLinkSpecifier>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
