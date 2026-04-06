<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property \Aws\Api\DateTimeResult|null $firstRevisionCreatedAt
 * @property string|null $firstRevisionCreatedBy
 * @property list<string>|null $glossaryTerms
 * @property string $id
 * @property string $name
 * @property string $owningProjectId
 */
class DataProductResultItem extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     description?: string|null,
     *     domainId: string,
     *     firstRevisionCreatedAt?: \Aws\Api\DateTimeResult|null,
     *     firstRevisionCreatedBy?: string|null,
     *     glossaryTerms?: list<string>|null,
     *     id: string,
     *     name: string,
     *     owningProjectId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
