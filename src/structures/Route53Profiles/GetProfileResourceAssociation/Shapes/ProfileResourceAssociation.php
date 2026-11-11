<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\GetProfileResourceAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $OwnerId
 * @property string|null $ProfileId
 * @property string|null $ResourceArn
 * @property string|null $ResourceType
 * @property string|null $ResourceProperties
 * @property 'COMPLETE'|'DELETING'|'UPDATING'|'CREATING'|'DELETED'|'FAILED'|null $Status
 * @property string|null $StatusMessage
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $ModificationTime
 */
class ProfileResourceAssociation extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     OwnerId?: string|null,
     *     ProfileId?: string|null,
     *     ResourceArn?: string|null,
     *     ResourceType?: string|null,
     *     ResourceProperties?: string|null,
     *     Status?: 'COMPLETE'|'DELETING'|'UPDATING'|'CREATING'|'DELETED'|'FAILED'|null,
     *     StatusMessage?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     ModificationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
