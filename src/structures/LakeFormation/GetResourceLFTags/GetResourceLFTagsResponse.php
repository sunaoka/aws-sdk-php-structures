<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetResourceLFTags;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\LFTagPair>|null $LFTagOnDatabase
 * @property list<Shapes\LFTagPair>|null $LFTagsOnTable
 * @property list<Shapes\ColumnLFTag>|null $LFTagsOnColumns
 */
class GetResourceLFTagsResponse extends Response
{
}
