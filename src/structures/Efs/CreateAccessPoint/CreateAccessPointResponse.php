<?php

namespace Sunaoka\Aws\Structures\Efs\CreateAccessPoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ClientToken
 * @property string $Name
 * @property list<Shapes\Tag> $Tags
 * @property string $AccessPointId
 * @property string $AccessPointArn
 * @property string $FileSystemId
 * @property Shapes\PosixUser $PosixUser
 * @property Shapes\RootDirectory $RootDirectory
 * @property string $OwnerId
 * @property 'creating'|'available'|'updating'|'deleting'|'deleted'|'error' $LifeCycleState
 */
class CreateAccessPointResponse extends Response
{
}
