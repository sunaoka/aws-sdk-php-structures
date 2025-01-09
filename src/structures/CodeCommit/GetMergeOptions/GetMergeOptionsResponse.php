<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetMergeOptions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<'FAST_FORWARD_MERGE'|'SQUASH_MERGE'|'THREE_WAY_MERGE'> $mergeOptions
 * @property string $sourceCommitId
 * @property string $destinationCommitId
 * @property string $baseCommitId
 */
class GetMergeOptionsResponse extends Response
{
}
