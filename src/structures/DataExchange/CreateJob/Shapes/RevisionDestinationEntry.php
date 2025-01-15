<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string|null $KeyPattern
 * @property string $RevisionId
 */
class RevisionDestinationEntry extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     KeyPattern?: string|null,
     *     RevisionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
