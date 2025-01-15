<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RESOURCE'|'MODULE'|'HOOK'|null $Type
 * @property string|null $TypeName
 * @property string|null $Arn
 * @property string|null $VersionId
 * @property string|null $PublisherId
 * @property string|null $PublicVersionNumber
 */
class DescribeTypeRequest extends Request
{
    /**
     * @param array{
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK'|null,
     *     TypeName?: string|null,
     *     Arn?: string|null,
     *     VersionId?: string|null,
     *     PublisherId?: string|null,
     *     PublicVersionNumber?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
