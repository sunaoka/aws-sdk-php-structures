<?php

namespace Sunaoka\Aws\Structures\OSIS\CreatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineName
 * @property int<1, max> $MinUnits
 * @property int<1, max> $MaxUnits
 * @property string $PipelineConfigurationBody
 * @property Shapes\LogPublishingOptions $LogPublishingOptions
 * @property Shapes\VpcOptions $VpcOptions
 * @property Shapes\BufferOptions $BufferOptions
 * @property Shapes\EncryptionAtRestOptions $EncryptionAtRestOptions
 * @property list<Shapes\Tag> $Tags
 */
class CreatePipelineRequest extends Request
{
    /**
     * @param array{
     *     PipelineName: string,
     *     MinUnits: int<1, max>,
     *     MaxUnits: int<1, max>,
     *     PipelineConfigurationBody: string,
     *     LogPublishingOptions?: Shapes\LogPublishingOptions,
     *     VpcOptions?: Shapes\VpcOptions,
     *     BufferOptions?: Shapes\BufferOptions,
     *     EncryptionAtRestOptions?: Shapes\EncryptionAtRestOptions,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
