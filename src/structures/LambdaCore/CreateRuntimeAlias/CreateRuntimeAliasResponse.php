<?php

namespace Sunaoka\Aws\Structures\LambdaCore\CreateRuntimeAlias;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $RuntimeVersion
 * @property string $RuntimeVersionArn
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'PENDING_DELETION' $State
 * @property string|null $Description
 * @property Shapes\RuntimeReleaseLifecycle|null $ReleaseLifecycle
 * @property string $Created
 * @property string $LastModified
 */
class CreateRuntimeAliasResponse extends Response
{
}
