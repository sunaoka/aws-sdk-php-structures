<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetMLConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Destination $destination
 * @property string $roleArn
 */
class MLOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     destination?: Destination,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
