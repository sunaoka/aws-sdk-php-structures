<?php

namespace Sunaoka\Aws\Structures\EMRContainers\CancelJobRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $virtualClusterId
 */
class CancelJobRunRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     virtualClusterId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
