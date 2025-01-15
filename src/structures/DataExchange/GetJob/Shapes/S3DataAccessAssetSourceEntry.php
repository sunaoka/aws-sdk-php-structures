<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property list<string>|null $KeyPrefixes
 * @property list<string>|null $Keys
 * @property list<KmsKeyToGrant>|null $KmsKeysToGrant
 */
class S3DataAccessAssetSourceEntry extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     KeyPrefixes?: list<string>|null,
     *     Keys?: list<string>|null,
     *     KmsKeysToGrant?: list<KmsKeyToGrant>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
