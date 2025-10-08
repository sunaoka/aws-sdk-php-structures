<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetDomainLayout;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $LayoutDefinitionName
 * @property string $Description
 * @property string $DisplayName
 * @property bool|null $IsDefault
 * @property 'PROFILE_EXPLORER' $LayoutType
 * @property string $Layout
 * @property string $Version
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property array<string, string>|null $Tags
 */
class GetDomainLayoutResponse extends Response
{
}
