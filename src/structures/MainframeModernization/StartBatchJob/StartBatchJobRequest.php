<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\StartBatchJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property Shapes\BatchJobIdentifier $batchJobIdentifier
 * @property array<string, string>|null $jobParams
 */
class StartBatchJobRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     batchJobIdentifier: Shapes\BatchJobIdentifier,
     *     jobParams?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
