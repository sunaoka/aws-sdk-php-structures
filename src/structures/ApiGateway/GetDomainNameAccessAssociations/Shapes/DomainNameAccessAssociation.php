<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDomainNameAccessAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domainNameAccessAssociationArn
 * @property string|null $domainNameArn
 * @property 'VPCE'|null $accessAssociationSourceType
 * @property string|null $accessAssociationSource
 * @property array<string, string>|null $tags
 */
class DomainNameAccessAssociation extends Shape
{
    /**
     * @param array{
     *     domainNameAccessAssociationArn?: string|null,
     *     domainNameArn?: string|null,
     *     accessAssociationSourceType?: 'VPCE'|null,
     *     accessAssociationSource?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
