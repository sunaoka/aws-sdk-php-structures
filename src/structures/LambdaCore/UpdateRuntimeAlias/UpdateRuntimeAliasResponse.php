<?php

namespace Sunaoka\Aws\Structures\LambdaCore\UpdateRuntimeAlias;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RuntimeName
 * @property string $Name
 * @property string $Arn
 * @property string $RuntimeVersion
 * @property string $RuntimeVersionArn
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'PENDING_DELETION' $State
 * @property string|null $Description
 * @property Shapes\Compatibility|null $Compatibility
 * @property Shapes\RuntimeReleaseLifecycle|null $ReleaseLifecycle
 * @property string $Created
 * @property string $LastModified
 */
class UpdateRuntimeAliasResponse extends Response
{
}
