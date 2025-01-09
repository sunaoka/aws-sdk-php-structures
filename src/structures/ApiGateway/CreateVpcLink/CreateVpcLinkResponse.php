<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateVpcLink;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $name
 * @property string $description
 * @property list<string> $targetArns
 * @property 'AVAILABLE'|'PENDING'|'DELETING'|'FAILED' $status
 * @property string $statusMessage
 * @property array<string, string> $tags
 */
class CreateVpcLinkResponse extends Response
{
}
