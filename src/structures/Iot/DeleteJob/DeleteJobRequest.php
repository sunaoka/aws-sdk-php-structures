<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property bool $force
 * @property string $namespaceId
 */
class DeleteJobRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     force?: bool,
     *     namespaceId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
