<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetApplicationRevisions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationName
 * @property list<Shapes\RevisionLocation> $revisions
 */
class BatchGetApplicationRevisionsRequest extends Request
{
    /**
     * @param array{
     *     applicationName: string,
     *     revisions: list<Shapes\RevisionLocation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
