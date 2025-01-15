<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListExports;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $botVersion
 * @property list<Shapes\ExportSummary>|null $exportSummaries
 * @property string|null $nextToken
 * @property string|null $localeId
 */
class ListExportsResponse extends Response
{
}
