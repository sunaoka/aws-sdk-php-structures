<?php

namespace Sunaoka\Aws\Structures\WorkDocs\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'AR'|'BG'|'BN'|'DA'|'DE'|'CS'|'EL'|'EN'|'ES'|'FA'|'FI'|'FR'|'HI'|'HU'|'ID'|'IT'|'JA'|'KO'|'LT'|'LV'|'NL'|'NO'|'PT'|'RO'|'RU'|'SV'|'SW'|'TH'|'TR'|'ZH'|'DEFAULT'> $TextLocales
 * @property list<'IMAGE'|'DOCUMENT'|'PDF'|'SPREADSHEET'|'PRESENTATION'|'AUDIO'|'VIDEO'|'SOURCE_CODE'|'OTHER'> $ContentCategories
 * @property list<'FOLDER'|'DOCUMENT'|'COMMENT'|'DOCUMENT_VERSION'> $ResourceTypes
 * @property list<string> $Labels
 * @property list<SearchPrincipalType> $Principals
 * @property list<string> $AncestorIds
 * @property list<'OWNED'|'SHARED_WITH_ME'> $SearchCollectionTypes
 * @property LongRangeType $SizeRange
 * @property DateRangeType $CreatedRange
 * @property DateRangeType $ModifiedRange
 */
class Filters extends Shape
{
    /**
     * @param array{
     *     TextLocales?: list<'AR'|'BG'|'BN'|'DA'|'DE'|'CS'|'EL'|'EN'|'ES'|'FA'|'FI'|'FR'|'HI'|'HU'|'ID'|'IT'|'JA'|'KO'|'LT'|'LV'|'NL'|'NO'|'PT'|'RO'|'RU'|'SV'|'SW'|'TH'|'TR'|'ZH'|'DEFAULT'>,
     *     ContentCategories?: list<'IMAGE'|'DOCUMENT'|'PDF'|'SPREADSHEET'|'PRESENTATION'|'AUDIO'|'VIDEO'|'SOURCE_CODE'|'OTHER'>,
     *     ResourceTypes?: list<'FOLDER'|'DOCUMENT'|'COMMENT'|'DOCUMENT_VERSION'>,
     *     Labels?: list<string>,
     *     Principals?: list<SearchPrincipalType>,
     *     AncestorIds?: list<string>,
     *     SearchCollectionTypes?: list<'OWNED'|'SHARED_WITH_ME'>,
     *     SizeRange?: LongRangeType,
     *     CreatedRange?: DateRangeType,
     *     ModifiedRange?: DateRangeType
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
