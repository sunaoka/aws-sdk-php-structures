<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PathToObjectIdentifiers> $PathToObjectIdentifiersList
 * @property string $NextToken
 */
class BatchListObjectParentPathsResponse extends Shape
{
    /**
     * @param array{
     *     PathToObjectIdentifiersList?: list<PathToObjectIdentifiers>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
