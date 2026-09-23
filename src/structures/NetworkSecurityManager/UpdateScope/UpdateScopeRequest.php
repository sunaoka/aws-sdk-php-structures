<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\UpdateScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scopeIdentifier
 * @property string $updateToken
 * @property string|null $scopeDescription
 * @property Shapes\ScopeConfiguration|null $scopeConfiguration
 * @property bool $isPublished
 * @property string|null $clientToken
 */
class UpdateScopeRequest extends Request
{
    /**
     * @param array{
     *     scopeIdentifier: string,
     *     updateToken: string,
     *     scopeDescription?: string|null,
     *     scopeConfiguration?: Shapes\ScopeConfiguration|null,
     *     isPublished: bool,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
