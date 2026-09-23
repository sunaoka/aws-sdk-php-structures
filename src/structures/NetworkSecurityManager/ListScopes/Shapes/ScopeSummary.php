<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListScopes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scopeId
 * @property string $scopeArn
 * @property string|null $scopeName
 * @property 'DRAFT'|'ACTIVE'|'DISABLED'|null $status
 * @property string|null $version
 * @property bool|null $hasPublishedVersion
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class ScopeSummary extends Shape
{
    /**
     * @param array{
     *     scopeId: string,
     *     scopeArn: string,
     *     scopeName?: string|null,
     *     status?: 'DRAFT'|'ACTIVE'|'DISABLED'|null,
     *     version?: string|null,
     *     hasPublishedVersion?: bool|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
