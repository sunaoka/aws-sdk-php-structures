<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\ListWebFunctionEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $revisionId
 * @property int<1, 100> $weight
 */
class RevisionWeight extends Shape
{
    /**
     * @param array{
     *     revisionId: string,
     *     weight: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
