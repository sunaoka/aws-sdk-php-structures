<?php

namespace Sunaoka\Aws\Structures\ConnectCases\StartMergeCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldIdentifier> $fieldIds
 * @property string $sourceCaseId
 */
class FieldsConfiguration extends Shape
{
    /**
     * @param array{
     *     fieldIds: list<FieldIdentifier>,
     *     sourceCaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
