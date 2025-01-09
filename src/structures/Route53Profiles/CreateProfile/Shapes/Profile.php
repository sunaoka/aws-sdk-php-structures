<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\CreateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $ClientToken
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $ModificationTime
 * @property string $Name
 * @property string $OwnerId
 * @property 'NOT_SHARED'|'SHARED_WITH_ME'|'SHARED_BY_ME' $ShareStatus
 * @property 'COMPLETE'|'DELETING'|'UPDATING'|'CREATING'|'DELETED'|'FAILED' $Status
 * @property string $StatusMessage
 */
class Profile extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     ClientToken?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Id?: string,
     *     ModificationTime?: \Aws\Api\DateTimeResult,
     *     Name?: string,
     *     OwnerId?: string,
     *     ShareStatus?: 'NOT_SHARED'|'SHARED_WITH_ME'|'SHARED_BY_ME',
     *     Status?: 'COMPLETE'|'DELETING'|'UPDATING'|'CREATING'|'DELETED'|'FAILED',
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
