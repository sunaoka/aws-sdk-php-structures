<?php

namespace Sunaoka\Aws\Structures\Efs\CreateAccessPoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ClientToken
 * @property string|null $Name
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $AccessPointId
 * @property string|null $AccessPointArn
 * @property string|null $FileSystemId
 * @property Shapes\PosixUser|null $PosixUser
 * @property Shapes\RootDirectory|null $RootDirectory
 * @property string|null $OwnerId
 * @property 'creating'|'available'|'updating'|'deleting'|'deleted'|'error'|null $LifeCycleState
 */
class CreateAccessPointResponse extends Response
{
}
