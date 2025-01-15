<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\RemoveDraftAppVersionResourceMappings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property list<string>|null $appRegistryAppNames
 * @property list<string>|null $eksSourceNames
 * @property list<string>|null $logicalStackNames
 * @property list<string>|null $resourceGroupNames
 * @property list<string>|null $resourceNames
 * @property list<string>|null $terraformSourceNames
 */
class RemoveDraftAppVersionResourceMappingsRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     appRegistryAppNames?: list<string>|null,
     *     eksSourceNames?: list<string>|null,
     *     logicalStackNames?: list<string>|null,
     *     resourceGroupNames?: list<string>|null,
     *     resourceNames?: list<string>|null,
     *     terraformSourceNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
