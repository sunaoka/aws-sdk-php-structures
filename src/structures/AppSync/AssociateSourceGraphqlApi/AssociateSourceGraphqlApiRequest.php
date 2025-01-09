<?php

namespace Sunaoka\Aws\Structures\AppSync\AssociateSourceGraphqlApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $mergedApiIdentifier
 * @property string $sourceApiIdentifier
 * @property string $description
 * @property Shapes\SourceApiAssociationConfig $sourceApiAssociationConfig
 */
class AssociateSourceGraphqlApiRequest extends Request
{
    /**
     * @param array{
     *     mergedApiIdentifier: string,
     *     sourceApiIdentifier: string,
     *     description?: string,
     *     sourceApiAssociationConfig?: Shapes\SourceApiAssociationConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
