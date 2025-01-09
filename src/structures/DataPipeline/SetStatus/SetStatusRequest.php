<?php

namespace Sunaoka\Aws\Structures\DataPipeline\SetStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineId
 * @property list<string> $objectIds
 * @property string $status
 */
class SetStatusRequest extends Request
{
    /**
     * @param array{
     *     pipelineId: string,
     *     objectIds: list<string>,
     *     status: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
