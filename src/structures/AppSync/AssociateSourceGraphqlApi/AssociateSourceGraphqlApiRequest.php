<?php

namespace Sunaoka\Aws\Structures\AppSync\AssociateSourceGraphqlApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $mergedApiIdentifier
 * @property string $sourceApiIdentifier
 * @property string|null $description
 * @property Shapes\SourceApiAssociationConfig|null $sourceApiAssociationConfig
 */
class AssociateSourceGraphqlApiRequest extends Request
{
    /**
     * @param array{
     *     mergedApiIdentifier: string,
     *     sourceApiIdentifier: string,
     *     description?: string|null,
     *     sourceApiAssociationConfig?: Shapes\SourceApiAssociationConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
