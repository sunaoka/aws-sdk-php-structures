<?php

namespace Sunaoka\Aws\Structures\Ssm\ListOpsItemRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OpsItemId
 * @property string $AssociationId
 * @property string $ResourceType
 * @property string $AssociationType
 * @property string $ResourceUri
 * @property OpsItemIdentity $CreatedBy
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property OpsItemIdentity $LastModifiedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class OpsItemRelatedItemSummary extends Shape
{
    /**
     * @param array{
     *     OpsItemId?: string,
     *     AssociationId?: string,
     *     ResourceType?: string,
     *     AssociationType?: string,
     *     ResourceUri?: string,
     *     CreatedBy?: OpsItemIdentity,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedBy?: OpsItemIdentity,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
