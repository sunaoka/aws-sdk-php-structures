<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelConversionTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConversionTaskId
 * @property bool|null $DryRun
 * @property string|null $ReasonMessage
 */
class CancelConversionTaskRequest extends Request
{
    /**
     * @param array{
     *     ConversionTaskId: string,
     *     DryRun?: bool|null,
     *     ReasonMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
