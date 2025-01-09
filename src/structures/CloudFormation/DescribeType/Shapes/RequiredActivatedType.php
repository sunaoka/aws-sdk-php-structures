<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TypeNameAlias
 * @property string $OriginalTypeName
 * @property string $PublisherId
 * @property list<int> $SupportedMajorVersions
 */
class RequiredActivatedType extends Shape
{
    /**
     * @param array{
     *     TypeNameAlias?: string,
     *     OriginalTypeName?: string,
     *     PublisherId?: string,
     *     SupportedMajorVersions?: list<int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
