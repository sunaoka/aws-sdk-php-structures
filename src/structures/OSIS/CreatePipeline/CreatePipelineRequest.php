<?php

namespace Sunaoka\Aws\Structures\OSIS\CreatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineName
 * @property int<1, max> $MinUnits
 * @property int<1, max> $MaxUnits
 * @property string $PipelineConfigurationBody
 * @property Shapes\LogPublishingOptions|null $LogPublishingOptions
 * @property Shapes\VpcOptions|null $VpcOptions
 * @property Shapes\BufferOptions|null $BufferOptions
 * @property Shapes\EncryptionAtRestOptions|null $EncryptionAtRestOptions
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $PipelineRoleArn
 */
class CreatePipelineRequest extends Request
{
    /**
     * @param array{
     *     PipelineName: string,
     *     MinUnits: int<1, max>,
     *     MaxUnits: int<1, max>,
     *     PipelineConfigurationBody: string,
     *     LogPublishingOptions?: Shapes\LogPublishingOptions|null,
     *     VpcOptions?: Shapes\VpcOptions|null,
     *     BufferOptions?: Shapes\BufferOptions|null,
     *     EncryptionAtRestOptions?: Shapes\EncryptionAtRestOptions|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     PipelineRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
