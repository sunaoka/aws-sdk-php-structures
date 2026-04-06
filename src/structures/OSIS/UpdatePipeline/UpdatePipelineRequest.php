<?php

namespace Sunaoka\Aws\Structures\OSIS\UpdatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineName
 * @property int<1, 96>|null $MinUnits
 * @property int<1, 96>|null $MaxUnits
 * @property string|null $PipelineConfigurationBody
 * @property Shapes\LogPublishingOptions|null $LogPublishingOptions
 */
class UpdatePipelineRequest extends Request
{
    /**
     * @param array{
     *     PipelineName: string,
     *     MinUnits?: int<1, 96>|null,
     *     MaxUnits?: int<1, 96>|null,
     *     PipelineConfigurationBody?: string|null,
     *     LogPublishingOptions?: Shapes\LogPublishingOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
