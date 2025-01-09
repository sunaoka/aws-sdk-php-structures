<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DefineIndexField;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property Shapes\IndexField $IndexField
 */
class DefineIndexFieldRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     IndexField: Shapes\IndexField
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
