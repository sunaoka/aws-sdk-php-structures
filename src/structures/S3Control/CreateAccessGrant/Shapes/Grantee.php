<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DIRECTORY_USER'|'DIRECTORY_GROUP'|'IAM'|null $GranteeType
 * @property string|null $GranteeIdentifier
 */
class Grantee extends Shape
{
    /**
     * @param array{
     *     GranteeType?: 'DIRECTORY_USER'|'DIRECTORY_GROUP'|'IAM'|null,
     *     GranteeIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
