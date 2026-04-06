<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateFormType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $name
 * @property Shapes\Model $model
 * @property string $owningProjectIdentifier
 * @property 'ENABLED'|'DISABLED'|null $status
 * @property string|null $description
 */
class CreateFormTypeRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     name: string,
     *     model: Shapes\Model,
     *     owningProjectIdentifier: string,
     *     status?: 'ENABLED'|'DISABLED'|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
