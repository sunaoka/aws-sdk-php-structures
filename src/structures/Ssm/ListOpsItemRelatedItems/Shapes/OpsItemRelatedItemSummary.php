<?php

namespace Sunaoka\Aws\Structures\Ssm\ListOpsItemRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OpsItemId
 * @property string|null $AssociationId
 * @property string|null $ResourceType
 * @property string|null $AssociationType
 * @property string|null $ResourceUri
 * @property OpsItemIdentity|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property OpsItemIdentity|null $LastModifiedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class OpsItemRelatedItemSummary extends Shape
{
    /**
     * @param array{
     *     OpsItemId?: string|null,
     *     AssociationId?: string|null,
     *     ResourceType?: string|null,
     *     AssociationType?: string|null,
     *     ResourceUri?: string|null,
     *     CreatedBy?: OpsItemIdentity|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedBy?: OpsItemIdentity|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
