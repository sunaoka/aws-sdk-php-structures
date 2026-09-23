<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $scopeName
 * @property string|null $scopeDescription
 * @property Shapes\ScopeConfiguration $scopeConfiguration
 * @property bool|null $isPublished
 * @property array<string, string>|null $tags
 */
class CreateScopeRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     scopeName: string,
     *     scopeDescription?: string|null,
     *     scopeConfiguration: Shapes\ScopeConfiguration,
     *     isPublished?: bool|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
