<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\DiscoverInputSchema;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\SourceSchema|null $InputSchema
 * @property list<list<string>>|null $ParsedInputRecords
 * @property list<string>|null $ProcessedInputRecords
 * @property list<string>|null $RawInputRecords
 */
class DiscoverInputSchemaResponse extends Response
{
}
