<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\StartBatchJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $authSecretsManagerArn
 * @property Shapes\BatchJobIdentifier $batchJobIdentifier
 * @property array<string, string> $jobParams
 */
class StartBatchJobRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     authSecretsManagerArn?: string,
     *     batchJobIdentifier: Shapes\BatchJobIdentifier,
     *     jobParams?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
