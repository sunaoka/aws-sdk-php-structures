<?php

namespace Sunaoka\Aws\Structures\OSIS\UpdatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineName
 * @property int<1, max>|null $MinUnits
 * @property int<1, max>|null $MaxUnits
 * @property string|null $PipelineConfigurationBody
 * @property Shapes\LogPublishingOptions|null $LogPublishingOptions
 * @property Shapes\BufferOptions|null $BufferOptions
 * @property Shapes\EncryptionAtRestOptions|null $EncryptionAtRestOptions
 * @property string|null $PipelineRoleArn
 */
class UpdatePipelineRequest extends Request
{
    /**
     * @param array{
     *     PipelineName: string,
     *     MinUnits?: int<1, max>|null,
     *     MaxUnits?: int<1, max>|null,
     *     PipelineConfigurationBody?: string|null,
     *     LogPublishingOptions?: Shapes\LogPublishingOptions|null,
     *     BufferOptions?: Shapes\BufferOptions|null,
     *     EncryptionAtRestOptions?: Shapes\EncryptionAtRestOptions|null,
     *     PipelineRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
