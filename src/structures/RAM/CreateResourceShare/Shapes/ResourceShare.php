<?php

namespace Sunaoka\Aws\Structures\RAM\CreateResourceShare\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceShareArn
 * @property string $name
 * @property string $owningAccountId
 * @property bool $allowExternalPrincipals
 * @property 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'|'DELETED' $status
 * @property string $statusMessage
 * @property list<Tag> $tags
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property 'CREATED_FROM_POLICY'|'PROMOTING_TO_STANDARD'|'STANDARD' $featureSet
 */
class ResourceShare extends Shape
{
    /**
     * @param array{
     *     resourceShareArn?: string,
     *     name?: string,
     *     owningAccountId?: string,
     *     allowExternalPrincipals?: bool,
     *     status?: 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'|'DELETED',
     *     statusMessage?: string,
     *     tags?: list<Tag>,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     featureSet?: 'CREATED_FROM_POLICY'|'PROMOTING_TO_STANDARD'|'STANDARD'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
