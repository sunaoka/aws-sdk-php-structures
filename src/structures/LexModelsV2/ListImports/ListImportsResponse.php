<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListImports;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $botVersion
 * @property list<Shapes\ImportSummary>|null $importSummaries
 * @property string|null $nextToken
 * @property string|null $localeId
 */
class ListImportsResponse extends Response
{
}
