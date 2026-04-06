<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoMLDataSource $DataSource
 * @property 'None'|'Gzip'|null $CompressionType
 * @property string $TargetAttributeName
 * @property string|null $ContentType
 * @property 'training'|'validation'|null $ChannelType
 * @property string|null $SampleWeightAttributeName
 */
class AutoMLChannel extends Shape
{
    /**
     * @param array{
     *     DataSource: AutoMLDataSource,
     *     CompressionType?: 'None'|'Gzip'|null,
     *     TargetAttributeName: string,
     *     ContentType?: string|null,
     *     ChannelType?: 'training'|'validation'|null,
     *     SampleWeightAttributeName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
