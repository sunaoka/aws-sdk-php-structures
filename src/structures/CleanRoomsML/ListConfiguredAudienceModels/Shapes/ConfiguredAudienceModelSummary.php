<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListConfiguredAudienceModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $name
 * @property string $audienceModelArn
 * @property ConfiguredAudienceModelOutputConfig $outputConfig
 * @property string $description
 * @property string $configuredAudienceModelArn
 * @property 'ACTIVE' $status
 */
class ConfiguredAudienceModelSummary extends Shape
{
    /**
     * @param array{
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     name: string,
     *     audienceModelArn: string,
     *     outputConfig: ConfiguredAudienceModelOutputConfig,
     *     description?: string,
     *     configuredAudienceModelArn: string,
     *     status: 'ACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
