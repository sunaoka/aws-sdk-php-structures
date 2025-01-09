<?php

namespace Sunaoka\Aws\Structures\AppRegistry\GetAttributeGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property string $attributes
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 * @property array<string, string> $tags
 * @property string $createdBy
 */
class GetAttributeGroupResponse extends Response
{
}
