<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindingsFilter;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ARCHIVE'|'NOOP'|null $action
 * @property string|null $arn
 * @property string|null $description
 * @property Shapes\FindingCriteria|null $findingCriteria
 * @property string|null $id
 * @property string|null $name
 * @property int|null $position
 * @property array<string, string>|null $tags
 */
class GetFindingsFilterResponse extends Response
{
}
