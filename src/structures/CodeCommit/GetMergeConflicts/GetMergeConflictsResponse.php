<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetMergeConflicts;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $mergeable
 * @property string $destinationCommitId
 * @property string $sourceCommitId
 * @property string|null $baseCommitId
 * @property list<Shapes\ConflictMetadata> $conflictMetadataList
 * @property string|null $nextToken
 */
class GetMergeConflictsResponse extends Response
{
}
