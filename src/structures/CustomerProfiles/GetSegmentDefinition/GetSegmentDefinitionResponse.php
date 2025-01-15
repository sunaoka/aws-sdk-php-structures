<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SegmentDefinitionName
 * @property string|null $DisplayName
 * @property string|null $Description
 * @property Shapes\SegmentGroup|null $SegmentGroups
 * @property string $SegmentDefinitionArn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property array<string, string>|null $Tags
 */
class GetSegmentDefinitionResponse extends Response
{
}
