<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateVpcLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property list<string> $targetArns
 * @property array<string, string> $tags
 */
class CreateVpcLinkRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     targetArns: list<string>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
