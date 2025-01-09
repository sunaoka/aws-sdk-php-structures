<?php

namespace Sunaoka\Aws\Structures\Schemas\PutCodeBinding;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property string $SchemaVersion
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED' $Status
 */
class PutCodeBindingResponse extends Response
{
}
