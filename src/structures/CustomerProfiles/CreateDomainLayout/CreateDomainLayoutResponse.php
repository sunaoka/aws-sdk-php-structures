<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateDomainLayout;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $LayoutDefinitionName
 * @property string $Description
 * @property string $DisplayName
 * @property bool|null $IsDefault
 * @property 'PROFILE_EXPLORER' $LayoutType
 * @property string $Layout
 * @property string $Version
 * @property array<string, string>|null $Tags
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 */
class CreateDomainLayoutResponse extends Response
{
}
