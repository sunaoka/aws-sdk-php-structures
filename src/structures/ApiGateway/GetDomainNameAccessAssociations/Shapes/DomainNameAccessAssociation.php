<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDomainNameAccessAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainNameAccessAssociationArn
 * @property string $domainNameArn
 * @property 'VPCE' $accessAssociationSourceType
 * @property string $accessAssociationSource
 * @property array<string, string> $tags
 */
class DomainNameAccessAssociation extends Shape
{
    /**
     * @param array{
     *     domainNameAccessAssociationArn?: string,
     *     domainNameArn?: string,
     *     accessAssociationSourceType?: 'VPCE',
     *     accessAssociationSource?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
