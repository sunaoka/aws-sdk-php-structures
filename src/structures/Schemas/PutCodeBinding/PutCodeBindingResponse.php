<?php

namespace Sunaoka\Aws\Structures\Schemas\PutCodeBinding;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property string|null $SchemaVersion
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|null $Status
 */
class PutCodeBindingResponse extends Response
{
}
