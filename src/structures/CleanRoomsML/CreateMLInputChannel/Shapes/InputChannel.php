<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateMLInputChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InputChannelDataSource $dataSource
 * @property string $roleArn
 */
class InputChannel extends Shape
{
    /**
     * @param array{
     *     dataSource: InputChannelDataSource,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
