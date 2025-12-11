<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\CreateGlobalResolver;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property string $name
 * @property string|null $observabilityRegion
 * @property list<string> $regions
 * @property array<string, string>|null $tags
 */
class CreateGlobalResolverRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     name: string,
     *     observabilityRegion?: string|null,
     *     regions: list<string>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
