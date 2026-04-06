<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationS3;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property string|null $Subdirectory
 * @property 'STANDARD'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_INSTANT_RETRIEVAL'|null $S3StorageClass
 * @property Shapes\S3Config|null $S3Config
 */
class UpdateLocationS3Request extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     Subdirectory?: string|null,
     *     S3StorageClass?: 'STANDARD'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_INSTANT_RETRIEVAL'|null,
     *     S3Config?: Shapes\S3Config|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
