<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\AddDraftAppVersionResourceMappings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property list<Shapes\ResourceMapping> $resourceMappings
 */
class AddDraftAppVersionResourceMappingsRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     resourceMappings: list<Shapes\ResourceMapping>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
