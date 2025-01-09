<?php

namespace Sunaoka\Aws\Structures\Iot\CancelJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $reasonCode
 * @property string $comment
 * @property bool $force
 */
class CancelJobRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     reasonCode?: string,
     *     comment?: string,
     *     force?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
