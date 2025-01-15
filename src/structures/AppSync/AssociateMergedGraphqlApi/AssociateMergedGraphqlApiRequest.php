<?php

namespace Sunaoka\Aws\Structures\AppSync\AssociateMergedGraphqlApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceApiIdentifier
 * @property string $mergedApiIdentifier
 * @property string|null $description
 * @property Shapes\SourceApiAssociationConfig|null $sourceApiAssociationConfig
 */
class AssociateMergedGraphqlApiRequest extends Request
{
    /**
     * @param array{
     *     sourceApiIdentifier: string,
     *     mergedApiIdentifier: string,
     *     description?: string|null,
     *     sourceApiAssociationConfig?: Shapes\SourceApiAssociationConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
