<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DiscoverInputSchema;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\SourceSchema $InputSchema
 * @property list<list<string>> $ParsedInputRecords
 * @property list<string> $ProcessedInputRecords
 * @property list<string> $RawInputRecords
 */
class DiscoverInputSchemaResponse extends Response
{
}
