<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $description
 * @property string $domainId
 * @property \Aws\Api\DateTimeResult $firstRevisionCreatedAt
 * @property string $firstRevisionCreatedBy
 * @property list<string> $glossaryTerms
 * @property string $id
 * @property string $name
 * @property string $owningProjectId
 */
class DataProductResultItem extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string,
     *     description?: string,
     *     domainId: string,
     *     firstRevisionCreatedAt?: \Aws\Api\DateTimeResult,
     *     firstRevisionCreatedBy?: string,
     *     glossaryTerms?: list<string>,
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
