<?php

namespace Sunaoka\Aws\Structures\Sfn\RedriveExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $executionArn
 * @property string|null $clientToken
 */
class RedriveExecutionRequest extends Request
{
    /**
     * @param array{
     *     executionArn: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
