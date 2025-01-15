<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $name
 * @property string|null $version
 * @property 'BOT'|'INTENT'|'SLOT_TYPE'|null $resourceType
 * @property 'ALEXA_SKILLS_KIT'|'LEX'|null $exportType
 * @property 'IN_PROGRESS'|'READY'|'FAILED'|null $exportStatus
 * @property string|null $failureReason
 * @property string|null $url
 */
class GetExportResponse extends Response
{
}
