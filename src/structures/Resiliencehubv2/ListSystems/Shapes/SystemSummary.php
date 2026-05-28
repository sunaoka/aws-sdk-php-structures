<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListSystems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $systemId
 * @property string $name
 * @property string|null $systemArn
 * @property int|null $userJourneysCount
 * @property int|null $servicesCount
 * @property string|null $organizationId
 * @property string|null $ouId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class SystemSummary extends Shape
{
    /**
     * @param array{
     *     systemId: string,
     *     name: string,
     *     systemArn?: string|null,
     *     userJourneysCount?: int|null,
     *     servicesCount?: int|null,
     *     organizationId?: string|null,
     *     ouId?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
