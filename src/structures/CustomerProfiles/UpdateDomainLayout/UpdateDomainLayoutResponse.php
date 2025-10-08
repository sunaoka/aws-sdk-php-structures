<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateDomainLayout;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $LayoutDefinitionName
 * @property string|null $Description
 * @property string|null $DisplayName
 * @property bool|null $IsDefault
 * @property 'PROFILE_EXPLORER'|null $LayoutType
 * @property string|null $Layout
 * @property string|null $Version
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property array<string, string>|null $Tags
 */
class UpdateDomainLayoutResponse extends Response
{
}
