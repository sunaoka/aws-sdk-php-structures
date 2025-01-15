<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OutputLocation
 * @property EncryptionConfiguration|null $EncryptionConfiguration
 * @property string|null $ExpectedBucketOwner
 * @property AclConfiguration|null $AclConfiguration
 */
class ResultConfiguration extends Shape
{
    /**
     * @param array{
     *     OutputLocation?: string|null,
     *     EncryptionConfiguration?: EncryptionConfiguration|null,
     *     ExpectedBucketOwner?: string|null,
     *     AclConfiguration?: AclConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
