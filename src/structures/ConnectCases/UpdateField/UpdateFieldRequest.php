<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateField;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string $domainId
 * @property string $fieldId
 * @property string|null $name
 */
class UpdateFieldRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     domainId: string,
     *     fieldId: string,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
