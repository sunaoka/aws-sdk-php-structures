<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlossaryItemAdditionalAttributes|null $additionalAttributes
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property string $id
 * @property string $name
 * @property string $owningProjectId
 * @property 'DISABLED'|'ENABLED' $status
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class GlossaryItem extends Shape
{
    /**
     * @param array{
     *     additionalAttributes?: GlossaryItemAdditionalAttributes|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     description?: string|null,
     *     domainId: string,
     *     id: string,
     *     name: string,
     *     owningProjectId: string,
     *     status: 'DISABLED'|'ENABLED',
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
