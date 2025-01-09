<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DeactivateType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TypeName
 * @property 'RESOURCE'|'MODULE'|'HOOK' $Type
 * @property string $Arn
 */
class DeactivateTypeRequest extends Request
{
    /**
     * @param array{
     *     TypeName?: string,
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK',
     *     Arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
