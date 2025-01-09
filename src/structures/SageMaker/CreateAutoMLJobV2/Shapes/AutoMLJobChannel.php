<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'training'|'validation' $ChannelType
 * @property string $ContentType
 * @property 'None'|'Gzip' $CompressionType
 * @property AutoMLDataSource $DataSource
 */
class AutoMLJobChannel extends Shape
{
    /**
     * @param array{
     *     ChannelType?: 'training'|'validation',
     *     ContentType?: string,
     *     CompressionType?: 'None'|'Gzip',
     *     DataSource?: AutoMLDataSource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
