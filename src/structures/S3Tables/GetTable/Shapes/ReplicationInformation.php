<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceTableARN
 */
class ReplicationInformation extends Shape
{
    /**
     * @param array{sourceTableARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
