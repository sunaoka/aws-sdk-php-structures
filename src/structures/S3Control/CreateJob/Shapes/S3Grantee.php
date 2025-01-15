<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'id'|'emailAddress'|'uri'|null $TypeIdentifier
 * @property string|null $Identifier
 * @property string|null $DisplayName
 */
class S3Grantee extends Shape
{
    /**
     * @param array{
     *     TypeIdentifier?: 'id'|'emailAddress'|'uri'|null,
     *     Identifier?: string|null,
     *     DisplayName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
