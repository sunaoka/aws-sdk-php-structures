<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListBatchJobRestartPoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $authSecretsManagerArn
 * @property string $executionId
 */
class ListBatchJobRestartPointsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     authSecretsManagerArn?: string,
     *     executionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
