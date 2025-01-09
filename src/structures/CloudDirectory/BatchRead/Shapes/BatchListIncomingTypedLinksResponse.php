<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TypedLinkSpecifier> $LinkSpecifiers
 * @property string $NextToken
 */
class BatchListIncomingTypedLinksResponse extends Shape
{
    /**
     * @param array{
     *     LinkSpecifiers?: list<TypedLinkSpecifier>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
