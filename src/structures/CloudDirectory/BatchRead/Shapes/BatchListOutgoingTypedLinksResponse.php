<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TypedLinkSpecifier> $TypedLinkSpecifiers
 * @property string $NextToken
 */
class BatchListOutgoingTypedLinksResponse extends Shape
{
    /**
     * @param array{
     *     TypedLinkSpecifiers?: list<TypedLinkSpecifier>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
