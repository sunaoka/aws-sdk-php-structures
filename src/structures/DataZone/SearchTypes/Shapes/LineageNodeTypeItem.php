<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainId
 * @property string|null $name
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property string $revision
 * @property array<string, FormEntryOutput> $formsOutput
 */
class LineageNodeTypeItem extends Shape
{
    /**
     * @param array{
     *     domainId: string,
     *     name?: string|null,
     *     description?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     revision: string,
     *     formsOutput: array<string, FormEntryOutput>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
