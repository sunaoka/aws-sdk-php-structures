<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeFeaturedResultsSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FeaturedResultsSetId
 * @property string|null $FeaturedResultsSetName
 * @property string|null $Description
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 * @property list<string>|null $QueryTexts
 * @property list<Shapes\FeaturedDocumentWithMetadata>|null $FeaturedDocumentsWithMetadata
 * @property list<Shapes\FeaturedDocumentMissing>|null $FeaturedDocumentsMissing
 * @property int|null $LastUpdatedTimestamp
 * @property int|null $CreationTimestamp
 */
class DescribeFeaturedResultsSetResponse extends Response
{
}
