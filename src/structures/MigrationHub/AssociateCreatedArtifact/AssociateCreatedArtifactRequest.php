<?php

namespace Sunaoka\Aws\Structures\MigrationHub\AssociateCreatedArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProgressUpdateStream
 * @property string $MigrationTaskName
 * @property Shapes\CreatedArtifact $CreatedArtifact
 * @property bool|null $DryRun
 */
class AssociateCreatedArtifactRequest extends Request
{
    /**
     * @param array{
     *     ProgressUpdateStream: string,
     *     MigrationTaskName: string,
     *     CreatedArtifact: Shapes\CreatedArtifact,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
