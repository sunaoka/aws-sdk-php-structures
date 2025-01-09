<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetProfileObjectTypeTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TemplateId
 * @property string $SourceName
 * @property string $SourceObject
 * @property bool $AllowProfileCreation
 * @property string $SourceLastUpdatedTimestampFormat
 * @property array<string, Shapes\ObjectTypeField> $Fields
 * @property array<string, list<Shapes\ObjectTypeKey>> $Keys
 */
class GetProfileObjectTypeTemplateResponse extends Response
{
}
