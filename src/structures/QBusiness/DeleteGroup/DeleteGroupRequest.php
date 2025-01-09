<?php

namespace Sunaoka\Aws\Structures\QBusiness\DeleteGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $indexId
 * @property string $groupName
 * @property string $dataSourceId
 */
class DeleteGroupRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     indexId: string,
     *     groupName: string,
     *     dataSourceId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
