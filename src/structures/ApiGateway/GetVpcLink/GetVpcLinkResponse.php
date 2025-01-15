<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetVpcLink;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $description
 * @property list<string>|null $targetArns
 * @property 'AVAILABLE'|'PENDING'|'DELETING'|'FAILED'|null $status
 * @property string|null $statusMessage
 * @property array<string, string>|null $tags
 */
class GetVpcLinkResponse extends Response
{
}
