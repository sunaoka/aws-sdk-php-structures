<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLenses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LensArn
 * @property string|null $LensAlias
 * @property string|null $LensName
 * @property 'AWS_OFFICIAL'|'CUSTOM_SHARED'|'CUSTOM_SELF'|null $LensType
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $LensVersion
 * @property string|null $Owner
 * @property 'CURRENT'|'NOT_CURRENT'|'DEPRECATED'|'DELETED'|'UNSHARED'|null $LensStatus
 */
class LensSummary extends Shape
{
    /**
     * @param array{
     *     LensArn?: string|null,
     *     LensAlias?: string|null,
     *     LensName?: string|null,
     *     LensType?: 'AWS_OFFICIAL'|'CUSTOM_SHARED'|'CUSTOM_SELF'|null,
     *     Description?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     LensVersion?: string|null,
     *     Owner?: string|null,
     *     LensStatus?: 'CURRENT'|'NOT_CURRENT'|'DEPRECATED'|'DELETED'|'UNSHARED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
