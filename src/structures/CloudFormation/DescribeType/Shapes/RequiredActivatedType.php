<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TypeNameAlias
 * @property string|null $OriginalTypeName
 * @property string|null $PublisherId
 * @property list<int<1, 65535>>|null $SupportedMajorVersions
 */
class RequiredActivatedType extends Shape
{
    /**
     * @param array{
     *     TypeNameAlias?: string|null,
     *     OriginalTypeName?: string|null,
     *     PublisherId?: string|null,
     *     SupportedMajorVersions?: list<int<1, 65535>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
