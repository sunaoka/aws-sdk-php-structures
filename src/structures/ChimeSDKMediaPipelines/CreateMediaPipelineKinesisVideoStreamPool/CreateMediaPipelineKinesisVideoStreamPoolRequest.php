<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaPipelineKinesisVideoStreamPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\KinesisVideoStreamConfiguration $StreamConfiguration
 * @property string $PoolName
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag> $Tags
 */
class CreateMediaPipelineKinesisVideoStreamPoolRequest extends Request
{
    /**
     * @param array{
     *     StreamConfiguration: Shapes\KinesisVideoStreamConfiguration,
     *     PoolName: string,
     *     ClientRequestToken?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
