<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'id'|'emailAddress'|'uri' $TypeIdentifier
 * @property string $Identifier
 * @property string $DisplayName
 */
class S3Grantee extends Shape
{
    /**
     * @param array{
     *     TypeIdentifier?: 'id'|'emailAddress'|'uri',
     *     Identifier?: string,
     *     DisplayName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
