<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateFeaturedResultsSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $FeaturedResultsSetId
 * @property string|null $FeaturedResultsSetName
 * @property string|null $Description
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 * @property list<string>|null $QueryTexts
 * @property list<Shapes\FeaturedDocument>|null $FeaturedDocuments
 */
class UpdateFeaturedResultsSetRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     FeaturedResultsSetId: string,
     *     FeaturedResultsSetName?: string|null,
     *     Description?: string|null,
     *     Status?: 'ACTIVE'|'INACTIVE'|null,
     *     QueryTexts?: list<string>|null,
     *     FeaturedDocuments?: list<Shapes\FeaturedDocument>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
