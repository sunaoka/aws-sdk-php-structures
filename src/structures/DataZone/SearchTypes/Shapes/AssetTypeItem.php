<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainId
 * @property string $name
 * @property string $revision
 * @property string|null $description
 * @property array<string, FormEntryOutput> $formsOutput
 * @property string $owningProjectId
 * @property string|null $originDomainId
 * @property string|null $originProjectId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class AssetTypeItem extends Shape
{
    /**
     * @param array{
     *     domainId: string,
     *     name: string,
     *     revision: string,
     *     description?: string|null,
     *     formsOutput: array<string, FormEntryOutput>,
     *     owningProjectId: string,
     *     originDomainId?: string|null,
     *     originProjectId?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
