<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'training'|'validation'|null $ChannelType
 * @property string|null $ContentType
 * @property 'None'|'Gzip'|null $CompressionType
 * @property AutoMLDataSource|null $DataSource
 */
class AutoMLJobChannel extends Shape
{
    /**
     * @param array{
     *     ChannelType?: 'training'|'validation'|null,
     *     ContentType?: string|null,
     *     CompressionType?: 'None'|'Gzip'|null,
     *     DataSource?: AutoMLDataSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
