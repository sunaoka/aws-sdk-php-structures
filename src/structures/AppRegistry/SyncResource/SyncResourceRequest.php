<?php

namespace Sunaoka\Aws\Structures\AppRegistry\SyncResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CFN_STACK'|'RESOURCE_TAG_VALUE' $resourceType
 * @property string $resource
 */
class SyncResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceType: 'CFN_STACK'|'RESOURCE_TAG_VALUE',
     *     resource: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
