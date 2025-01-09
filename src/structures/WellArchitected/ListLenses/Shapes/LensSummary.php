<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLenses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LensArn
 * @property string $LensAlias
 * @property string $LensName
 * @property 'AWS_OFFICIAL'|'CUSTOM_SHARED'|'CUSTOM_SELF' $LensType
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property string $LensVersion
 * @property string $Owner
 * @property 'CURRENT'|'NOT_CURRENT'|'DEPRECATED'|'DELETED'|'UNSHARED' $LensStatus
 */
class LensSummary extends Shape
{
    /**
     * @param array{
     *     LensArn?: string,
     *     LensAlias?: string,
     *     LensName?: string,
     *     LensType?: 'AWS_OFFICIAL'|'CUSTOM_SHARED'|'CUSTOM_SELF',
     *     Description?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     LensVersion?: string,
     *     Owner?: string,
     *     LensStatus?: 'CURRENT'|'NOT_CURRENT'|'DEPRECATED'|'DELETED'|'UNSHARED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
