<?php

namespace Sunaoka\Aws\Structures\AppRegistry\ListAssociatedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property 'CFN_STACK'|'RESOURCE_TAG_VALUE' $resourceType
 * @property ResourceDetails $resourceDetails
 * @property list<'APPLY_APPLICATION_TAG'|'SKIP_APPLICATION_TAG'> $options
 */
class ResourceInfo extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     resourceType?: 'CFN_STACK'|'RESOURCE_TAG_VALUE',
     *     resourceDetails?: ResourceDetails,
     *     options?: list<'APPLY_APPLICATION_TAG'|'SKIP_APPLICATION_TAG'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
