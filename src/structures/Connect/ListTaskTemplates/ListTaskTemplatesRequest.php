<?php

namespace Sunaoka\Aws\Structures\Connect\ListTaskTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property string $Name
 */
class ListTaskTemplatesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Status?: 'ACTIVE'|'INACTIVE',
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
