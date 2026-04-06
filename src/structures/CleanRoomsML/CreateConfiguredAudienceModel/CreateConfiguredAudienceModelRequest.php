<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateConfiguredAudienceModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $audienceModelArn
 * @property Shapes\ConfiguredAudienceModelOutputConfig $outputConfig
 * @property string|null $description
 * @property list<'ALL'|'NONE'> $sharedAudienceMetrics
 * @property int<25, 500000>|null $minMatchingSeedSize
 * @property Shapes\AudienceSizeConfig|null $audienceSizeConfig
 * @property array<string, string>|null $tags
 * @property 'FROM_PARENT_RESOURCE'|'NONE'|null $childResourceTagOnCreatePolicy
 */
class CreateConfiguredAudienceModelRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     audienceModelArn: string,
     *     outputConfig: Shapes\ConfiguredAudienceModelOutputConfig,
     *     description?: string|null,
     *     sharedAudienceMetrics: list<'ALL'|'NONE'>,
     *     minMatchingSeedSize?: int<25, 500000>|null,
     *     audienceSizeConfig?: Shapes\AudienceSizeConfig|null,
     *     tags?: array<string, string>|null,
     *     childResourceTagOnCreatePolicy?: 'FROM_PARENT_RESOURCE'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
