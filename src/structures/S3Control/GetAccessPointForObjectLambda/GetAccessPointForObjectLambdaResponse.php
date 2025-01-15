<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessPointForObjectLambda;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property Shapes\PublicAccessBlockConfiguration|null $PublicAccessBlockConfiguration
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property Shapes\ObjectLambdaAccessPointAlias|null $Alias
 */
class GetAccessPointForObjectLambdaResponse extends Response
{
}
