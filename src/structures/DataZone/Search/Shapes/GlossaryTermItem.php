<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $domainId
 * @property string $glossaryId
 * @property string $id
 * @property string $longDescription
 * @property string $name
 * @property string $shortDescription
 * @property 'ENABLED'|'DISABLED' $status
 * @property TermRelations $termRelations
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 */
class GlossaryTermItem extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string,
     *     domainId: string,
     *     glossaryId: string,
     *     id: string,
     *     longDescription?: string,
     *     name: string,
     *     shortDescription?: string,
     *     status: 'ENABLED'|'DISABLED',
     *     termRelations?: TermRelations,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     updatedBy?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
