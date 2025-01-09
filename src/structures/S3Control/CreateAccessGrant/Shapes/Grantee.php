<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DIRECTORY_USER'|'DIRECTORY_GROUP'|'IAM' $GranteeType
 * @property string $GranteeIdentifier
 */
class Grantee extends Shape
{
    /**
     * @param array{
     *     GranteeType?: 'DIRECTORY_USER'|'DIRECTORY_GROUP'|'IAM',
     *     GranteeIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
