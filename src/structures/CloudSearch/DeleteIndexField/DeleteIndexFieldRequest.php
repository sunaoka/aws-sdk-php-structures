<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DeleteIndexField;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $IndexFieldName
 */
class DeleteIndexFieldRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     IndexFieldName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
