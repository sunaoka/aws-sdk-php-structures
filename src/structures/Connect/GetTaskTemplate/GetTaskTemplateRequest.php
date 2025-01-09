<?php

namespace Sunaoka\Aws\Structures\Connect\GetTaskTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $TaskTemplateId
 * @property string $SnapshotVersion
 */
class GetTaskTemplateRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     TaskTemplateId: string,
     *     SnapshotVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
