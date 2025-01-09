<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $KeyPattern
 * @property string $RevisionId
 */
class RevisionDestinationEntry extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     KeyPattern?: string,
     *     RevisionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
