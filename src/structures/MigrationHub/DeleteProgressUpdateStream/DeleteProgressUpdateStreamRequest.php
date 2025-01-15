<?php

namespace Sunaoka\Aws\Structures\MigrationHub\DeleteProgressUpdateStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProgressUpdateStreamName
 * @property bool|null $DryRun
 */
class DeleteProgressUpdateStreamRequest extends Request
{
    /**
     * @param array{
     *     ProgressUpdateStreamName: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
