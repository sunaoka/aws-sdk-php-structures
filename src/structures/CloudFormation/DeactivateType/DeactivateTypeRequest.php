<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DeactivateType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TypeName
 * @property 'RESOURCE'|'MODULE'|'HOOK'|null $Type
 * @property string|null $Arn
 */
class DeactivateTypeRequest extends Request
{
    /**
     * @param array{
     *     TypeName?: string|null,
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK'|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
