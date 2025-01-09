<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateFormType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property string $domainIdentifier
 * @property Shapes\Model $model
 * @property string $name
 * @property string $owningProjectIdentifier
 * @property 'ENABLED'|'DISABLED' $status
 */
class CreateFormTypeRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     domainIdentifier: string,
     *     model: Shapes\Model,
     *     name: string,
     *     owningProjectIdentifier: string,
     *     status?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
