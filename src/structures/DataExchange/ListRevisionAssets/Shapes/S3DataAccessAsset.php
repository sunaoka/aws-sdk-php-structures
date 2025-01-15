<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListRevisionAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property list<string>|null $KeyPrefixes
 * @property list<string>|null $Keys
 * @property string|null $S3AccessPointAlias
 * @property string|null $S3AccessPointArn
 * @property list<KmsKeyToGrant>|null $KmsKeysToGrant
 */
class S3DataAccessAsset extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     KeyPrefixes?: list<string>|null,
     *     Keys?: list<string>|null,
     *     S3AccessPointAlias?: string|null,
     *     S3AccessPointArn?: string|null,
     *     KmsKeysToGrant?: list<KmsKeyToGrant>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
