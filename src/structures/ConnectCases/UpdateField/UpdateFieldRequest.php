<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateField;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property string $domainId
 * @property string $fieldId
 * @property string $name
 */
class UpdateFieldRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     domainId: string,
     *     fieldId: string,
     *     name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
