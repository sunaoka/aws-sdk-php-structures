<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property bool|null $force
 * @property string|null $namespaceId
 */
class DeleteJobRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     force?: bool|null,
     *     namespaceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
