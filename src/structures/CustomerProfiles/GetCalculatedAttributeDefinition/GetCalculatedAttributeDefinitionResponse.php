<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetCalculatedAttributeDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CalculatedAttributeName
 * @property string $DisplayName
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property 'FIRST_OCCURRENCE'|'LAST_OCCURRENCE'|'COUNT'|'SUM'|'MINIMUM'|'MAXIMUM'|'AVERAGE'|'MAX_OCCURRENCE' $Statistic
 * @property Shapes\Filter $Filter
 * @property Shapes\Conditions $Conditions
 * @property Shapes\AttributeDetails $AttributeDetails
 * @property array<string, string> $Tags
 */
class GetCalculatedAttributeDefinitionResponse extends Response
{
}
