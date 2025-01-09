<?php

namespace Sunaoka\Aws\Structures\Braket\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $channelName
 * @property string $contentType
 * @property DataSource $dataSource
 */
class InputFileConfig extends Shape
{
    /**
     * @param array{
     *     channelName: string,
     *     contentType?: string,
     *     dataSource: DataSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
