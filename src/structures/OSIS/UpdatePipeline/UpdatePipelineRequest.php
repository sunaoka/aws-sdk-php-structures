<?php

namespace Sunaoka\Aws\Structures\OSIS\UpdatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineName
 * @property int<1, max> $MinUnits
 * @property int<1, max> $MaxUnits
 * @property string $PipelineConfigurationBody
 * @property Shapes\LogPublishingOptions $LogPublishingOptions
 * @property Shapes\BufferOptions $BufferOptions
 * @property Shapes\EncryptionAtRestOptions $EncryptionAtRestOptions
 */
class UpdatePipelineRequest extends Request
{
    /**
     * @param array{
     *     PipelineName: string,
     *     MinUnits?: int<1, max>,
     *     MaxUnits?: int<1, max>,
     *     PipelineConfigurationBody?: string,
     *     LogPublishingOptions?: Shapes\LogPublishingOptions,
     *     BufferOptions?: Shapes\BufferOptions,
     *     EncryptionAtRestOptions?: Shapes\EncryptionAtRestOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
