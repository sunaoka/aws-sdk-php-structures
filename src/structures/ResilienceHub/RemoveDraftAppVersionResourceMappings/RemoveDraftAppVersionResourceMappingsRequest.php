<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\RemoveDraftAppVersionResourceMappings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property list<string> $appRegistryAppNames
 * @property list<string> $eksSourceNames
 * @property list<string> $logicalStackNames
 * @property list<string> $resourceGroupNames
 * @property list<string> $resourceNames
 * @property list<string> $terraformSourceNames
 */
class RemoveDraftAppVersionResourceMappingsRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     appRegistryAppNames?: list<string>,
     *     eksSourceNames?: list<string>,
     *     logicalStackNames?: list<string>,
     *     resourceGroupNames?: list<string>,
     *     resourceNames?: list<string>,
     *     terraformSourceNames?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
