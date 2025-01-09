<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchGetField;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property list<Shapes\FieldIdentifier> $fields
 */
class BatchGetFieldRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     fields: list<Shapes\FieldIdentifier>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
