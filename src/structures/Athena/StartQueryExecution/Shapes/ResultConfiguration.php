<?php

namespace Sunaoka\Aws\Structures\Athena\StartQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutputLocation
 * @property EncryptionConfiguration $EncryptionConfiguration
 * @property string $ExpectedBucketOwner
 * @property AclConfiguration $AclConfiguration
 */
class ResultConfiguration extends Shape
{
    /**
     * @param array{
     *     OutputLocation?: string,
     *     EncryptionConfiguration?: EncryptionConfiguration,
     *     ExpectedBucketOwner?: string,
     *     AclConfiguration?: AclConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
