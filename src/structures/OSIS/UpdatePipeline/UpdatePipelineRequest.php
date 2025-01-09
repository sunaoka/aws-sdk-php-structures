<?php

namespace Sunaoka\Aws\Structures\OSIS\UpdatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineName
 * @property int $MinUnits
 * @property int $MaxUnits
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
     *     MinUnits?: int,
     *     MaxUnits?: int,
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
