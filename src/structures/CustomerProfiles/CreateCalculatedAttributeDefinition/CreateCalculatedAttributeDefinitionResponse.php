<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateCalculatedAttributeDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $CalculatedAttributeName
 * @property string|null $DisplayName
 * @property string|null $Description
 * @property Shapes\AttributeDetails|null $AttributeDetails
 * @property Shapes\Conditions|null $Conditions
 * @property Shapes\Filter|null $Filter
 * @property 'FIRST_OCCURRENCE'|'LAST_OCCURRENCE'|'COUNT'|'SUM'|'MINIMUM'|'MAXIMUM'|'AVERAGE'|'MAX_OCCURRENCE'|null $Statistic
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property array<string, string>|null $Tags
 */
class CreateCalculatedAttributeDefinitionResponse extends Response
{
}
