<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateVpcLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<string> $targetArns
 * @property array<string, string>|null $tags
 */
class CreateVpcLinkRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     targetArns: list<string>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
