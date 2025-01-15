<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string $domainId
 * @property string $glossaryId
 * @property string $id
 * @property string|null $longDescription
 * @property string $name
 * @property string|null $shortDescription
 * @property 'ENABLED'|'DISABLED' $status
 * @property TermRelations|null $termRelations
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class GlossaryTermItem extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     domainId: string,
     *     glossaryId: string,
     *     id: string,
     *     longDescription?: string|null,
     *     name: string,
     *     shortDescription?: string|null,
     *     status: 'ENABLED'|'DISABLED',
     *     termRelations?: TermRelations|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
