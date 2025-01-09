<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\ListProfileAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $ModificationTime
 * @property string $Name
 * @property string $OwnerId
 * @property string $ProfileId
 * @property string $ResourceId
 * @property 'COMPLETE'|'DELETING'|'UPDATING'|'CREATING'|'DELETED'|'FAILED' $Status
 * @property string $StatusMessage
 */
class ProfileAssociation extends Shape
{
    /**
     * @param array{
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Id?: string,
     *     ModificationTime?: \Aws\Api\DateTimeResult,
     *     Name?: string,
     *     OwnerId?: string,
     *     ProfileId?: string,
     *     ResourceId?: string,
     *     Status?: 'COMPLETE'|'DELETING'|'UPDATING'|'CREATING'|'DELETED'|'FAILED',
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
