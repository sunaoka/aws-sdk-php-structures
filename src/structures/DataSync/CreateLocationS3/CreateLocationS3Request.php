<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationS3;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Subdirectory
 * @property string $S3BucketArn
 * @property 'STANDARD'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_INSTANT_RETRIEVAL' $S3StorageClass
 * @property Shapes\S3Config $S3Config
 * @property list<string> $AgentArns
 * @property list<Shapes\TagListEntry> $Tags
 */
class CreateLocationS3Request extends Request
{
    /**
     * @param array{
     *     Subdirectory?: string,
     *     S3BucketArn: string,
     *     S3StorageClass?: 'STANDARD'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_INSTANT_RETRIEVAL',
     *     S3Config: Shapes\S3Config,
     *     AgentArns?: list<string>,
     *     Tags?: list<Shapes\TagListEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
