<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaPipelineKinesisVideoStreamPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\KinesisVideoStreamConfiguration $StreamConfiguration
 * @property string $PoolName
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateMediaPipelineKinesisVideoStreamPoolRequest extends Request
{
    /**
     * @param array{
     *     StreamConfiguration: Shapes\KinesisVideoStreamConfiguration,
     *     PoolName: string,
     *     ClientRequestToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
