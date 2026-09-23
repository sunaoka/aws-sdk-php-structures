<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListResourceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property 'Rule'|'Template'|'Policy'|'Deployment'|'Scope' $resourceType
 */
class ResourceAssociation extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     resourceType: 'Rule'|'Template'|'Policy'|'Deployment'|'Scope'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
