<?php

namespace Sunaoka\Aws\Structures\OSIS\CreatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineName
 * @property int<1, 96> $MinUnits
 * @property int<1, 96> $MaxUnits
 * @property string $PipelineConfigurationBody
 * @property Shapes\LogPublishingOptions|null $LogPublishingOptions
 * @property Shapes\VpcOptions|null $VpcOptions
 * @property list<Shapes\Tag>|null $Tags
 */
class CreatePipelineRequest extends Request
{
    /**
     * @param array{
     *     PipelineName: string,
     *     MinUnits: int<1, 96>,
     *     MaxUnits: int<1, 96>,
     *     PipelineConfigurationBody: string,
     *     LogPublishingOptions?: Shapes\LogPublishingOptions|null,
     *     VpcOptions?: Shapes\VpcOptions|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
