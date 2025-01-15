<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\GetProfileResourceAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $Id
 * @property \Aws\Api\DateTimeResult|null $ModificationTime
 * @property string|null $Name
 * @property string|null $OwnerId
 * @property string|null $ProfileId
 * @property string|null $ResourceArn
 * @property string|null $ResourceProperties
 * @property string|null $ResourceType
 * @property 'COMPLETE'|'DELETING'|'UPDATING'|'CREATING'|'DELETED'|'FAILED'|null $Status
 * @property string|null $StatusMessage
 */
class ProfileResourceAssociation extends Shape
{
    /**
     * @param array{
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Id?: string|null,
     *     ModificationTime?: \Aws\Api\DateTimeResult|null,
     *     Name?: string|null,
     *     OwnerId?: string|null,
     *     ProfileId?: string|null,
     *     ResourceArn?: string|null,
     *     ResourceProperties?: string|null,
     *     ResourceType?: string|null,
     *     Status?: 'COMPLETE'|'DELETING'|'UPDATING'|'CREATING'|'DELETED'|'FAILED'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
