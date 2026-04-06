<?php

namespace Sunaoka\Aws\Structures\Omics\StartRunBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $batchName
 * @property string $requestId
 * @property array<string, string>|null $tags
 * @property Shapes\DefaultRunSetting $defaultRunSetting
 * @property Shapes\BatchRunSettings $batchRunSettings
 */
class StartRunBatchRequest extends Request
{
    /**
     * @param array{
     *     batchName?: string|null,
     *     requestId: string,
     *     tags?: array<string, string>|null,
     *     defaultRunSetting: Shapes\DefaultRunSetting,
     *     batchRunSettings: Shapes\BatchRunSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
