<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateField;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $fieldId
 * @property string|null $name
 * @property string|null $description
 * @property Shapes\FieldAttributes|null $attributes
 */
class UpdateFieldRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     fieldId: string,
     *     name?: string|null,
     *     description?: string|null,
     *     attributes?: Shapes\FieldAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
