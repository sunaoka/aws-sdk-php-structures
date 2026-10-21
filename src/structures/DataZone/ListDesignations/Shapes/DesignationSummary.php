<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDesignations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainId
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property 'MANAGED'|'USER_CREATED'|null $designationType
 * @property bool $deletionProtection
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class DesignationSummary extends Shape
{
    /**
     * @param array{
     *     domainId: string,
     *     id: string,
     *     name: string,
     *     description?: string|null,
     *     designationType?: 'MANAGED'|'USER_CREATED'|null,
     *     deletionProtection: bool,
     *     createdBy: string,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
