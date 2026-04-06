<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\PutMLConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Destination|null $destination
 * @property string $roleArn
 */
class MLOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     destination?: Destination|null,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
