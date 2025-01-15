<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ObjectIdentifierAndLinkNameTuple>|null $ParentLinks
 * @property string|null $NextToken
 */
class BatchListObjectParentsResponse extends Shape
{
    /**
     * @param array{
     *     ParentLinks?: list<ObjectIdentifierAndLinkNameTuple>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
