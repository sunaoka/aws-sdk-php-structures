<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $indexId
 * @property string $groupName
 * @property string $dataSourceId
 */
class GetGroupRequest extends Request
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
