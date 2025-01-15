<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelConversionTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $ConversionTaskId
 * @property string|null $ReasonMessage
 */
class CancelConversionTaskRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ConversionTaskId: string,
     *     ReasonMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
