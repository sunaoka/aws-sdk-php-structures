<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeFeaturedResultsSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $FeaturedResultsSetId
 * @property string $FeaturedResultsSetName
 * @property string $Description
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property list<string> $QueryTexts
 * @property list<Shapes\FeaturedDocumentWithMetadata> $FeaturedDocumentsWithMetadata
 * @property list<Shapes\FeaturedDocumentMissing> $FeaturedDocumentsMissing
 * @property int $LastUpdatedTimestamp
 * @property int $CreationTimestamp
 */
class DescribeFeaturedResultsSetResponse extends Response
{
}
