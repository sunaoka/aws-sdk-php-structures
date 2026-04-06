<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\UpdateConfiguredAudienceModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredAudienceModelArn
 * @property Shapes\ConfiguredAudienceModelOutputConfig|null $outputConfig
 * @property string|null $audienceModelArn
 * @property list<'ALL'|'NONE'>|null $sharedAudienceMetrics
 * @property int<25, 500000>|null $minMatchingSeedSize
 * @property Shapes\AudienceSizeConfig|null $audienceSizeConfig
 * @property string|null $description
 */
class UpdateConfiguredAudienceModelRequest extends Request
{
    /**
     * @param array{
     *     configuredAudienceModelArn: string,
     *     outputConfig?: Shapes\ConfiguredAudienceModelOutputConfig|null,
     *     audienceModelArn?: string|null,
     *     sharedAudienceMetrics?: list<'ALL'|'NONE'>|null,
     *     minMatchingSeedSize?: int<25, 500000>|null,
     *     audienceSizeConfig?: Shapes\AudienceSizeConfig|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
