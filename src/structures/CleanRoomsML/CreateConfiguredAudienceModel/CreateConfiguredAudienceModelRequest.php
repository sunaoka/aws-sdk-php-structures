<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateConfiguredAudienceModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $audienceModelArn
 * @property Shapes\ConfiguredAudienceModelOutputConfig $outputConfig
 * @property string $description
 * @property list<'ALL'|'NONE'> $sharedAudienceMetrics
 * @property int $minMatchingSeedSize
 * @property Shapes\AudienceSizeConfig $audienceSizeConfig
 * @property array<string, string> $tags
 * @property 'FROM_PARENT_RESOURCE'|'NONE' $childResourceTagOnCreatePolicy
 */
class CreateConfiguredAudienceModelRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     audienceModelArn: string,
     *     outputConfig: Shapes\ConfiguredAudienceModelOutputConfig,
     *     description?: string,
     *     sharedAudienceMetrics: list<'ALL'|'NONE'>,
     *     minMatchingSeedSize?: int,
     *     audienceSizeConfig?: Shapes\AudienceSizeConfig,
     *     tags?: array<string, string>,
     *     childResourceTagOnCreatePolicy?: 'FROM_PARENT_RESOURCE'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
