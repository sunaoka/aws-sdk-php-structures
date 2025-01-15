<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DeregisterType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Arn
 * @property 'RESOURCE'|'MODULE'|'HOOK'|null $Type
 * @property string|null $TypeName
 * @property string|null $VersionId
 */
class DeregisterTypeRequest extends Request
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK'|null,
     *     TypeName?: string|null,
     *     VersionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
