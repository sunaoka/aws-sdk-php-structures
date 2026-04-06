<?php

namespace Sunaoka\Aws\Structures\KeyspacesStreams\ListStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $streamArn
 * @property string $keyspaceName
 * @property string $tableName
 * @property string $streamLabel
 */
class Stream extends Shape
{
    /**
     * @param array{
     *     streamArn: string,
     *     keyspaceName: string,
     *     tableName: string,
     *     streamLabel: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
