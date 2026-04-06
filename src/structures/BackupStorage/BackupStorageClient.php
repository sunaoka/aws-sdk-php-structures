<?php

namespace Sunaoka\Aws\Structures\BackupStorage;

class BackupStorageClient extends \Aws\BackupStorage\BackupStorageClient
{
    use DeleteObject\DeleteObjectTrait;
    use GetChunk\GetChunkTrait;
    use GetObjectMetadata\GetObjectMetadataTrait;
    use ListChunks\ListChunksTrait;
    use ListObjects\ListObjectsTrait;
    use NotifyObjectComplete\NotifyObjectCompleteTrait;
    use PutChunk\PutChunkTrait;
    use PutObject\PutObjectTrait;
    use StartObject\StartObjectTrait;
}
