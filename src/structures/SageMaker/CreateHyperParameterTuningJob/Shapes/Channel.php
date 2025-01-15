<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChannelName
 * @property DataSource $DataSource
 * @property string|null $ContentType
 * @property 'None'|'Gzip'|null $CompressionType
 * @property 'None'|'RecordIO'|null $RecordWrapperType
 * @property 'Pipe'|'File'|'FastFile'|null $InputMode
 * @property ShuffleConfig|null $ShuffleConfig
 */
class Channel extends Shape
{
    /**
     * @param array{
     *     ChannelName: string,
     *     DataSource: DataSource,
     *     ContentType?: string|null,
     *     CompressionType?: 'None'|'Gzip'|null,
     *     RecordWrapperType?: 'None'|'RecordIO'|null,
     *     InputMode?: 'Pipe'|'File'|'FastFile'|null,
     *     ShuffleConfig?: ShuffleConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
