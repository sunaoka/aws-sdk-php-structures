<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PathToObjectIdentifiers>|null $PathToObjectIdentifiersList
 * @property string|null $NextToken
 */
class BatchListObjectParentPathsResponse extends Shape
{
    /**
     * @param array{
     *     PathToObjectIdentifiersList?: list<PathToObjectIdentifiers>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
