<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchDescribeMergeConflicts;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Conflict> $conflicts
 * @property string $nextToken
 * @property list<Shapes\BatchDescribeMergeConflictsError> $errors
 * @property string $destinationCommitId
 * @property string $sourceCommitId
 * @property string $baseCommitId
 */
class BatchDescribeMergeConflictsResponse extends Response
{
}
