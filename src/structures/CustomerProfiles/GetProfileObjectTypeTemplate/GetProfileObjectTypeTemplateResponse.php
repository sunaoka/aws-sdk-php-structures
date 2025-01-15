<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetProfileObjectTypeTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TemplateId
 * @property string|null $SourceName
 * @property string|null $SourceObject
 * @property bool|null $AllowProfileCreation
 * @property string|null $SourceLastUpdatedTimestampFormat
 * @property array<string, Shapes\ObjectTypeField>|null $Fields
 * @property array<string, list<Shapes\ObjectTypeKey>>|null $Keys
 */
class GetProfileObjectTypeTemplateResponse extends Response
{
}
