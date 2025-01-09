<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SegmentDefinitionName
 * @property string $DisplayName
 * @property string $Description
 * @property Shapes\SegmentGroup $SegmentGroups
 * @property string $SegmentDefinitionArn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property array<string, string> $Tags
 */
class GetSegmentDefinitionResponse extends Response
{
}
