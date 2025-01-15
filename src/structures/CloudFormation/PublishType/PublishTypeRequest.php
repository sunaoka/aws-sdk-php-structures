<?php

namespace Sunaoka\Aws\Structures\CloudFormation\PublishType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RESOURCE'|'MODULE'|'HOOK'|null $Type
 * @property string|null $Arn
 * @property string|null $TypeName
 * @property string|null $PublicVersionNumber
 */
class PublishTypeRequest extends Request
{
    /**
     * @param array{
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK'|null,
     *     Arn?: string|null,
     *     TypeName?: string|null,
     *     PublicVersionNumber?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
