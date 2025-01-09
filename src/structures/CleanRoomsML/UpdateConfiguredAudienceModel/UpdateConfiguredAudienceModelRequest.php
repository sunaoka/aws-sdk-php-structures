<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\UpdateConfiguredAudienceModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredAudienceModelArn
 * @property Shapes\ConfiguredAudienceModelOutputConfig $outputConfig
 * @property string $audienceModelArn
 * @property list<'ALL'|'NONE'> $sharedAudienceMetrics
 * @property int $minMatchingSeedSize
 * @property Shapes\AudienceSizeConfig $audienceSizeConfig
 * @property string $description
 */
class UpdateConfiguredAudienceModelRequest extends Request
{
    /**
     * @param array{
     *     configuredAudienceModelArn: string,
     *     outputConfig?: Shapes\ConfiguredAudienceModelOutputConfig,
     *     audienceModelArn?: string,
     *     sharedAudienceMetrics?: list<'ALL'|'NONE'>,
     *     minMatchingSeedSize?: int,
     *     audienceSizeConfig?: Shapes\AudienceSizeConfig,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
