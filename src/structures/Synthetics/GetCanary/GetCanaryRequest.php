<?php

namespace Sunaoka\Aws\Structures\Synthetics\GetCanary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $DryRunId
 */
class GetCanaryRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DryRunId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
