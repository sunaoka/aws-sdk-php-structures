<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string $version
 * @property 'BOT'|'INTENT'|'SLOT_TYPE' $resourceType
 * @property 'ALEXA_SKILLS_KIT'|'LEX' $exportType
 * @property 'IN_PROGRESS'|'READY'|'FAILED' $exportStatus
 * @property string $failureReason
 * @property string $url
 */
class GetExportResponse extends Response
{
}
