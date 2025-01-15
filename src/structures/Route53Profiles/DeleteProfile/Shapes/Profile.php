<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\DeleteProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $ClientToken
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $Id
 * @property \Aws\Api\DateTimeResult|null $ModificationTime
 * @property string|null $Name
 * @property string|null $OwnerId
 * @property 'NOT_SHARED'|'SHARED_WITH_ME'|'SHARED_BY_ME'|null $ShareStatus
 * @property 'COMPLETE'|'DELETING'|'UPDATING'|'CREATING'|'DELETED'|'FAILED'|null $Status
 * @property string|null $StatusMessage
 */
class Profile extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     ClientToken?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Id?: string|null,
     *     ModificationTime?: \Aws\Api\DateTimeResult|null,
     *     Name?: string|null,
     *     OwnerId?: string|null,
     *     ShareStatus?: 'NOT_SHARED'|'SHARED_WITH_ME'|'SHARED_BY_ME'|null,
     *     Status?: 'COMPLETE'|'DELETING'|'UPDATING'|'CREATING'|'DELETED'|'FAILED'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
