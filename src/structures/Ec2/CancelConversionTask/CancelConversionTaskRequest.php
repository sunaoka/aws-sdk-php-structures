<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelConversionTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $ConversionTaskId
 * @property string $ReasonMessage
 */
class CancelConversionTaskRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ConversionTaskId: string,
     *     ReasonMessage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
