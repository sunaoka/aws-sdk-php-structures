<?php

namespace Sunaoka\Aws\Structures\CloudFormation\PublishType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RESOURCE'|'MODULE'|'HOOK' $Type
 * @property string $Arn
 * @property string $TypeName
 * @property string $PublicVersionNumber
 */
class PublishTypeRequest extends Request
{
    /**
     * @param array{
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK',
     *     Arn?: string,
     *     TypeName?: string,
     *     PublicVersionNumber?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
