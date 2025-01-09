<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateFeaturedResultsSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $FeaturedResultsSetId
 * @property string $FeaturedResultsSetName
 * @property string $Description
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property list<string> $QueryTexts
 * @property list<Shapes\FeaturedDocument> $FeaturedDocuments
 */
class UpdateFeaturedResultsSetRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     FeaturedResultsSetId: string,
     *     FeaturedResultsSetName?: string,
     *     Description?: string,
     *     Status?: 'ACTIVE'|'INACTIVE',
     *     QueryTexts?: list<string>,
     *     FeaturedDocuments?: list<Shapes\FeaturedDocument>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
