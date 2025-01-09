<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListImports;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botVersion
 * @property list<Shapes\ImportSummary> $importSummaries
 * @property string $nextToken
 * @property string $localeId
 */
class ListImportsResponse extends Response
{
}
