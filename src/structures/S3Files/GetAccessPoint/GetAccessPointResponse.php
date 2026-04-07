<?php

namespace Sunaoka\Aws\Structures\S3Files\GetAccessPoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $accessPointArn
 * @property string $accessPointId
 * @property string $clientToken
 * @property string $fileSystemId
 * @property 'available'|'creating'|'deleting'|'deleted'|'error'|'updating' $status
 * @property string $ownerId
 * @property Shapes\PosixUser|null $posixUser
 * @property Shapes\RootDirectory|null $rootDirectory
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $name
 */
class GetAccessPointResponse extends Response
{
}
