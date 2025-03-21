<?php

namespace Sunaoka\Aws\Structures\MigrationHub\DisassociateCreatedArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProgressUpdateStream
 * @property string $MigrationTaskName
 * @property string $CreatedArtifactName
 * @property bool|null $DryRun
 */
class DisassociateCreatedArtifactRequest extends Request
{
    /**
     * @param array{
     *     ProgressUpdateStream: string,
     *     MigrationTaskName: string,
     *     CreatedArtifactName: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
