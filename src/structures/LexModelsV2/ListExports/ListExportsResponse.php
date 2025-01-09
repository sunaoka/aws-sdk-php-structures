<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListExports;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botVersion
 * @property list<Shapes\ExportSummary> $exportSummaries
 * @property string $nextToken
 * @property string $localeId
 */
class ListExportsResponse extends Response
{
}
