<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetBlobDifferences;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\DiffHunk> $hunks
 * @property bool $isBinary
 * @property int|null $beforeBlobSize
 * @property int $afterBlobSize
 * @property string|null $NextToken
 */
class GetBlobDifferencesResponse extends Response
{
}
