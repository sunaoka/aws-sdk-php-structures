<?php

namespace Sunaoka\Aws\Structures\LambdaCore\RestoreRuntime;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RuntimeName
 * @property string|null $RuntimeVersion
 * @property string|null $RuntimeAlias
 * @property string $Arn
 * @property 'ACTIVE'|'PENDING_DELETION'|'DELETING'|'FAILED' $State
 * @property string $LastModified
 */
class RestoreRuntimeResponse extends Response
{
}
