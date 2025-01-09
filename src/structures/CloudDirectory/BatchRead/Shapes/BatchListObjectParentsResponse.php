<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ObjectIdentifierAndLinkNameTuple> $ParentLinks
 * @property string $NextToken
 */
class BatchListObjectParentsResponse extends Shape
{
    /**
     * @param array{
     *     ParentLinks?: list<ObjectIdentifierAndLinkNameTuple>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
