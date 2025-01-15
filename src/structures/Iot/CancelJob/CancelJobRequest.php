<?php

namespace Sunaoka\Aws\Structures\Iot\CancelJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string|null $reasonCode
 * @property string|null $comment
 * @property bool|null $force
 */
class CancelJobRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     reasonCode?: string|null,
     *     comment?: string|null,
     *     force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
