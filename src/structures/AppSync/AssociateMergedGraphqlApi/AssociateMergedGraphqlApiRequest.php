<?php

namespace Sunaoka\Aws\Structures\AppSync\AssociateMergedGraphqlApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceApiIdentifier
 * @property string $mergedApiIdentifier
 * @property string $description
 * @property Shapes\SourceApiAssociationConfig $sourceApiAssociationConfig
 */
class AssociateMergedGraphqlApiRequest extends Request
{
    /**
     * @param array{
     *     sourceApiIdentifier: string,
     *     mergedApiIdentifier: string,
     *     description?: string,
     *     sourceApiAssociationConfig?: Shapes\SourceApiAssociationConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
