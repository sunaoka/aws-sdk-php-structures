<?php

namespace Sunaoka\Aws\Structures\QBusiness\PutGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $indexId
 * @property string $groupName
 * @property string $dataSourceId
 * @property 'INDEX'|'DATASOURCE' $type
 * @property Shapes\GroupMembers $groupMembers
 * @property string $roleArn
 */
class PutGroupRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     indexId: string,
     *     groupName: string,
     *     dataSourceId?: string,
     *     type: 'INDEX'|'DATASOURCE',
     *     groupMembers: Shapes\GroupMembers,
     *     roleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
