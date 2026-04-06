<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\StartBatchJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string|null $authSecretsManagerArn
 * @property Shapes\BatchJobIdentifier $batchJobIdentifier
 * @property array<string, string>|null $jobParams
 */
class StartBatchJobRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     authSecretsManagerArn?: string|null,
     *     batchJobIdentifier: Shapes\BatchJobIdentifier,
     *     jobParams?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
