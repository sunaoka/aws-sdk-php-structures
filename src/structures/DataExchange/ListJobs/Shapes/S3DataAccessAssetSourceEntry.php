<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property list<string> $KeyPrefixes
 * @property list<string> $Keys
 * @property list<KmsKeyToGrant> $KmsKeysToGrant
 */
class S3DataAccessAssetSourceEntry extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     KeyPrefixes?: list<string>,
     *     Keys?: list<string>,
     *     KmsKeysToGrant?: list<KmsKeyToGrant>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
