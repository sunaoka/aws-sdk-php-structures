<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindingsFilter;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ARCHIVE'|'NOOP' $action
 * @property string $arn
 * @property string $description
 * @property Shapes\FindingCriteria $findingCriteria
 * @property string $id
 * @property string $name
 * @property int $position
 * @property array<string, string> $tags
 */
class GetFindingsFilterResponse extends Response
{
}
