<?php

namespace Sunaoka\Aws\Structures\ConnectCases\DeleteField;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $fieldId
 */
class DeleteFieldRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     fieldId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
