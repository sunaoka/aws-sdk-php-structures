<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property list<Import>|null $imports
 * @property Model|null $model
 * @property string $name
 * @property string|null $originDomainId
 * @property string|null $originProjectId
 * @property string|null $owningProjectId
 * @property string $revision
 * @property 'ENABLED'|'DISABLED'|null $status
 */
class FormTypeData extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     description?: string|null,
     *     domainId: string,
     *     imports?: list<Import>|null,
     *     model?: Model|null,
     *     name: string,
     *     originDomainId?: string|null,
     *     originProjectId?: string|null,
     *     owningProjectId?: string|null,
     *     revision: string,
     *     status?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
