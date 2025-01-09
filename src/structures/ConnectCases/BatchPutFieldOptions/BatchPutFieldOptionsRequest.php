<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchPutFieldOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $fieldId
 * @property list<Shapes\FieldOption> $options
 */
class BatchPutFieldOptionsRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     fieldId: string,
     *     options: list<Shapes\FieldOption>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
