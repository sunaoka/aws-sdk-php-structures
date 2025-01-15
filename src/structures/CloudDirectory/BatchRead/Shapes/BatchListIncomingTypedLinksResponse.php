<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TypedLinkSpecifier>|null $LinkSpecifiers
 * @property string|null $NextToken
 */
class BatchListIncomingTypedLinksResponse extends Shape
{
    /**
     * @param array{
     *     LinkSpecifiers?: list<TypedLinkSpecifier>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
