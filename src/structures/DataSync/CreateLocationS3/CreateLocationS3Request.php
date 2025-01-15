<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationS3;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Subdirectory
 * @property string $S3BucketArn
 * @property 'STANDARD'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_INSTANT_RETRIEVAL'|null $S3StorageClass
 * @property Shapes\S3Config $S3Config
 * @property list<string>|null $AgentArns
 * @property list<Shapes\TagListEntry>|null $Tags
 */
class CreateLocationS3Request extends Request
{
    /**
     * @param array{
     *     Subdirectory?: string|null,
     *     S3BucketArn: string,
     *     S3StorageClass?: 'STANDARD'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_INSTANT_RETRIEVAL'|null,
     *     S3Config: Shapes\S3Config,
     *     AgentArns?: list<string>|null,
     *     Tags?: list<Shapes\TagListEntry>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
