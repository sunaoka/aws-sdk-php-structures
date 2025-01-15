<?php

namespace Sunaoka\Aws\Structures\MigrationHub\DisassociateDiscoveredResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProgressUpdateStream
 * @property string $MigrationTaskName
 * @property string $ConfigurationId
 * @property bool|null $DryRun
 */
class DisassociateDiscoveredResourceRequest extends Request
{
    /**
     * @param array{
     *     ProgressUpdateStream: string,
     *     MigrationTaskName: string,
     *     ConfigurationId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
