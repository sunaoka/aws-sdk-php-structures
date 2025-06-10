<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateCalculatedAttributeDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $CalculatedAttributeName
 * @property string|null $DisplayName
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property 'FIRST_OCCURRENCE'|'LAST_OCCURRENCE'|'COUNT'|'SUM'|'MINIMUM'|'MAXIMUM'|'AVERAGE'|'MAX_OCCURRENCE'|null $Statistic
 * @property Shapes\Conditions|null $Conditions
 * @property Shapes\AttributeDetails|null $AttributeDetails
 * @property bool|null $UseHistoricalData
 * @property 'PREPARING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|null $Status
 * @property Shapes\Readiness|null $Readiness
 * @property array<string, string>|null $Tags
 */
class UpdateCalculatedAttributeDefinitionResponse extends Response
{
}
