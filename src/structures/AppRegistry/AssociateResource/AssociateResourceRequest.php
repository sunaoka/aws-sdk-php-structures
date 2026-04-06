<?php

namespace Sunaoka\Aws\Structures\AppRegistry\AssociateResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $application
 * @property 'CFN_STACK'|'RESOURCE_TAG_VALUE' $resourceType
 * @property string $resource
 */
class AssociateResourceRequest extends Request
{
    /**
     * @param array{
     *     application: string,
     *     resourceType: 'CFN_STACK'|'RESOURCE_TAG_VALUE',
     *     resource: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
