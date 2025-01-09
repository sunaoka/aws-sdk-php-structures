<?php

namespace Sunaoka\Aws\Structures\MigrationHub\AssociateSourceResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProgressUpdateStream
 * @property string $MigrationTaskName
 * @property Shapes\SourceResource $SourceResource
 * @property bool $DryRun
 */
class AssociateSourceResourceRequest extends Request
{
    /**
     * @param array{
     *     ProgressUpdateStream: string,
     *     MigrationTaskName: string,
     *     SourceResource: Shapes\SourceResource,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
