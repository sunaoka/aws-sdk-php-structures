<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoMLDataSource $DataSource
 * @property 'None'|'Gzip' $CompressionType
 * @property string $TargetAttributeName
 * @property string $ContentType
 * @property 'training'|'validation' $ChannelType
 * @property string $SampleWeightAttributeName
 */
class AutoMLChannel extends Shape
{
    /**
     * @param array{
     *     DataSource?: AutoMLDataSource,
     *     CompressionType?: 'None'|'Gzip',
     *     TargetAttributeName: string,
     *     ContentType?: string,
     *     ChannelType?: 'training'|'validation',
     *     SampleWeightAttributeName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
