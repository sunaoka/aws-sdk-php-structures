<?php

namespace Sunaoka\Aws\Structures\AppRegistry\GetAttributeGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property string|null $attributes
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdateTime
 * @property array<string, string>|null $tags
 * @property string|null $createdBy
 */
class GetAttributeGroupResponse extends Response
{
}
