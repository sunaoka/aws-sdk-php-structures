<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChannelName
 * @property S3ModelDataSource $S3DataSource
 */
class AdditionalModelDataSource extends Shape
{
    /**
     * @param array{
     *     ChannelName: string,
     *     S3DataSource: S3ModelDataSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
