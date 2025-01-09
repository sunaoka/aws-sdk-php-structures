<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateCalculatedAttributeDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CalculatedAttributeName
 * @property string $DisplayName
 * @property string $Description
 * @property Shapes\AttributeDetails $AttributeDetails
 * @property Shapes\Conditions $Conditions
 * @property Shapes\Filter $Filter
 * @property 'FIRST_OCCURRENCE'|'LAST_OCCURRENCE'|'COUNT'|'SUM'|'MINIMUM'|'MAXIMUM'|'AVERAGE'|'MAX_OCCURRENCE' $Statistic
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property array<string, string> $Tags
 */
class CreateCalculatedAttributeDefinitionResponse extends Response
{
}
