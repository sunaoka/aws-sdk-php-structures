<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\GetProfileResourceAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $ModificationTime
 * @property string $Name
 * @property string $OwnerId
 * @property string $ProfileId
 * @property string $ResourceArn
 * @property string $ResourceProperties
 * @property string $ResourceType
 * @property 'COMPLETE'|'DELETING'|'UPDATING'|'CREATING'|'DELETED'|'FAILED' $Status
 * @property string $StatusMessage
 */
class ProfileResourceAssociation extends Shape
{
    /**
     * @param array{
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Id?: string,
     *     ModificationTime?: \Aws\Api\DateTimeResult,
     *     Name?: string,
     *     OwnerId?: string,
     *     ProfileId?: string,
     *     ResourceArn?: string,
     *     ResourceProperties?: string,
     *     ResourceType?: string,
     *     Status?: 'COMPLETE'|'DELETING'|'UPDATING'|'CREATING'|'DELETED'|'FAILED',
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
