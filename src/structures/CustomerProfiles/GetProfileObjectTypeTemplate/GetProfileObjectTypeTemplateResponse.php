<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetProfileObjectTypeTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TemplateId
 * @property string|null $SourceName
 * @property string|null $SourceObject
 * @property int<0, max>|null $DefaultMaxProfileObjectCount
 * @property \Aws\Api\DateTimeResult|null $DefaultMaxProfileObjectCountEffectiveAfter
 * @property bool|null $StoreOnly
 * @property bool|null $AllowProfileCreation
 * @property string|null $SourceLastUpdatedTimestampFormat
 * @property array<string, Shapes\ObjectTypeField>|null $Fields
 * @property array<string, list<Shapes\ObjectTypeKey>>|null $Keys
 */
class GetProfileObjectTypeTemplateResponse extends Response
{
}
