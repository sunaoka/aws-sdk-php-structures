<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaStreamPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ChimeSdkMeeting' $SourceType
 * @property string $SourceArn
 */
class MediaStreamSource extends Shape
{
    /**
     * @param array{
     *     SourceType: 'ChimeSdkMeeting',
     *     SourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
