<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DeregisterType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property 'RESOURCE'|'MODULE'|'HOOK' $Type
 * @property string $TypeName
 * @property string $VersionId
 */
class DeregisterTypeRequest extends Request
{
    /**
     * @param array{
     *     Arn?: string,
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK',
     *     TypeName?: string,
     *     VersionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
