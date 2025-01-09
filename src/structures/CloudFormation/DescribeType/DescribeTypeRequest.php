<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RESOURCE'|'MODULE'|'HOOK' $Type
 * @property string $TypeName
 * @property string $Arn
 * @property string $VersionId
 * @property string $PublisherId
 * @property string $PublicVersionNumber
 */
class DescribeTypeRequest extends Request
{
    /**
     * @param array{
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK',
     *     TypeName?: string,
     *     Arn?: string,
     *     VersionId?: string,
     *     PublisherId?: string,
     *     PublicVersionNumber?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
