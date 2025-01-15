<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketInventoryConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Id
 * @property Shapes\InventoryConfiguration $InventoryConfiguration
 * @property string|null $ExpectedBucketOwner
 */
class PutBucketInventoryConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Id: string,
     *     InventoryConfiguration: Shapes\InventoryConfiguration,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
