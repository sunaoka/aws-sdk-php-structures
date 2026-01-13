<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainId
 * @property string $name
 * @property string $revision
 * @property Model|null $model
 * @property 'ENABLED'|'DISABLED'|null $status
 * @property string|null $owningProjectId
 * @property string|null $originDomainId
 * @property string|null $originProjectId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $description
 * @property list<Import>|null $imports
 */
class FormTypeData extends Shape
{
    /**
     * @param array{
     *     domainId: string,
     *     name: string,
     *     revision: string,
     *     model?: Model|null,
     *     status?: 'ENABLED'|'DISABLED'|null,
     *     owningProjectId?: string|null,
     *     originDomainId?: string|null,
     *     originProjectId?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     description?: string|null,
     *     imports?: list<Import>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
