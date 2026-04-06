<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CreateImportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $importSourceArn
 * @property string $importRoleArn
 * @property Shapes\ImportFilter|null $importFilter
 */
class CreateImportTaskRequest extends Request
{
    /**
     * @param array{
     *     importSourceArn: string,
     *     importRoleArn: string,
     *     importFilter?: Shapes\ImportFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
