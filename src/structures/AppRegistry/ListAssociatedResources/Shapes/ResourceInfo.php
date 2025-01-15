<?php

namespace Sunaoka\Aws\Structures\AppRegistry\ListAssociatedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property 'CFN_STACK'|'RESOURCE_TAG_VALUE'|null $resourceType
 * @property ResourceDetails|null $resourceDetails
 * @property list<'APPLY_APPLICATION_TAG'|'SKIP_APPLICATION_TAG'>|null $options
 */
class ResourceInfo extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     arn?: string|null,
     *     resourceType?: 'CFN_STACK'|'RESOURCE_TAG_VALUE'|null,
     *     resourceDetails?: ResourceDetails|null,
     *     options?: list<'APPLY_APPLICATION_TAG'|'SKIP_APPLICATION_TAG'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
