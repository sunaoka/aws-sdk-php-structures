<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChannelName
 * @property DataSource $DataSource
 * @property string $ContentType
 * @property 'None'|'Gzip' $CompressionType
 * @property 'None'|'RecordIO' $RecordWrapperType
 * @property 'Pipe'|'File'|'FastFile' $InputMode
 * @property ShuffleConfig $ShuffleConfig
 */
class Channel extends Shape
{
    /**
     * @param array{
     *     ChannelName: string,
     *     DataSource: DataSource,
     *     ContentType?: string,
     *     CompressionType?: 'None'|'Gzip',
     *     RecordWrapperType?: 'None'|'RecordIO',
     *     InputMode?: 'Pipe'|'File'|'FastFile',
     *     ShuffleConfig?: ShuffleConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
