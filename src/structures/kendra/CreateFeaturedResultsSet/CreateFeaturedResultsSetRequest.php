<?php

namespace Sunaoka\Aws\Structures\kendra\CreateFeaturedResultsSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $FeaturedResultsSetName
 * @property string $Description
 * @property string $ClientToken
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property list<string> $QueryTexts
 * @property list<Shapes\FeaturedDocument> $FeaturedDocuments
 * @property list<Shapes\Tag> $Tags
 */
class CreateFeaturedResultsSetRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     FeaturedResultsSetName: string,
     *     Description?: string,
     *     ClientToken?: string,
     *     Status?: 'ACTIVE'|'INACTIVE',
     *     QueryTexts?: list<string>,
     *     FeaturedDocuments?: list<Shapes\FeaturedDocument>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
