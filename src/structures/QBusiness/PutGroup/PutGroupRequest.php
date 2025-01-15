<?php

namespace Sunaoka\Aws\Structures\QBusiness\PutGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $indexId
 * @property string $groupName
 * @property string|null $dataSourceId
 * @property 'INDEX'|'DATASOURCE' $type
 * @property Shapes\GroupMembers $groupMembers
 * @property string|null $roleArn
 */
class PutGroupRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     indexId: string,
     *     groupName: string,
     *     dataSourceId?: string|null,
     *     type: 'INDEX'|'DATASOURCE',
     *     groupMembers: Shapes\GroupMembers,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
