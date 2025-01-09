<?php

namespace Sunaoka\Aws\Structures\MigrationHub\CreateProgressUpdateStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProgressUpdateStreamName
 * @property bool $DryRun
 */
class CreateProgressUpdateStreamRequest extends Request
{
    /**
     * @param array{
     *     ProgressUpdateStreamName: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
