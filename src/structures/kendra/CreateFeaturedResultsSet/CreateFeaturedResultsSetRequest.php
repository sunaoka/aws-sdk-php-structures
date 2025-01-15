<?php

namespace Sunaoka\Aws\Structures\kendra\CreateFeaturedResultsSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $FeaturedResultsSetName
 * @property string|null $Description
 * @property string|null $ClientToken
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 * @property list<string>|null $QueryTexts
 * @property list<Shapes\FeaturedDocument>|null $FeaturedDocuments
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateFeaturedResultsSetRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     FeaturedResultsSetName: string,
     *     Description?: string|null,
     *     ClientToken?: string|null,
     *     Status?: 'ACTIVE'|'INACTIVE'|null,
     *     QueryTexts?: list<string>|null,
     *     FeaturedDocuments?: list<Shapes\FeaturedDocument>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
