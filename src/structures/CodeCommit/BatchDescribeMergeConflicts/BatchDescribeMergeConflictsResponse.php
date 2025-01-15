<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchDescribeMergeConflicts;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Conflict> $conflicts
 * @property string|null $nextToken
 * @property list<Shapes\BatchDescribeMergeConflictsError>|null $errors
 * @property string $destinationCommitId
 * @property string $sourceCommitId
 * @property string|null $baseCommitId
 */
class BatchDescribeMergeConflictsResponse extends Response
{
}
