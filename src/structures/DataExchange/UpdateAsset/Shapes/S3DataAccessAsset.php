<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property list<string> $KeyPrefixes
 * @property list<string> $Keys
 * @property string $S3AccessPointAlias
 * @property string $S3AccessPointArn
 * @property list<KmsKeyToGrant> $KmsKeysToGrant
 */
class S3DataAccessAsset extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     KeyPrefixes?: list<string>,
     *     Keys?: list<string>,
     *     S3AccessPointAlias?: string,
     *     S3AccessPointArn?: string,
     *     KmsKeysToGrant?: list<KmsKeyToGrant>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
