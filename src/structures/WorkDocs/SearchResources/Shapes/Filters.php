<?php

namespace Sunaoka\Aws\Structures\WorkDocs\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'AR'|'BG'|'BN'|'DA'|'DE'|'CS'|'EL'|'EN'|'ES'|'FA'|'FI'|'FR'|'HI'|'HU'|'ID'|'IT'|'JA'|'KO'|'LT'|'LV'|'NL'|'NO'|'PT'|'RO'|'RU'|'SV'|'SW'|'TH'|'TR'|'ZH'|'DEFAULT'>|null $TextLocales
 * @property list<'IMAGE'|'DOCUMENT'|'PDF'|'SPREADSHEET'|'PRESENTATION'|'AUDIO'|'VIDEO'|'SOURCE_CODE'|'OTHER'>|null $ContentCategories
 * @property list<'FOLDER'|'DOCUMENT'|'COMMENT'|'DOCUMENT_VERSION'>|null $ResourceTypes
 * @property list<string>|null $Labels
 * @property list<SearchPrincipalType>|null $Principals
 * @property list<string>|null $AncestorIds
 * @property list<'OWNED'|'SHARED_WITH_ME'>|null $SearchCollectionTypes
 * @property LongRangeType|null $SizeRange
 * @property DateRangeType|null $CreatedRange
 * @property DateRangeType|null $ModifiedRange
 */
class Filters extends Shape
{
    /**
     * @param array{
     *     TextLocales?: list<'AR'|'BG'|'BN'|'DA'|'DE'|'CS'|'EL'|'EN'|'ES'|'FA'|'FI'|'FR'|'HI'|'HU'|'ID'|'IT'|'JA'|'KO'|'LT'|'LV'|'NL'|'NO'|'PT'|'RO'|'RU'|'SV'|'SW'|'TH'|'TR'|'ZH'|'DEFAULT'>|null,
     *     ContentCategories?: list<'IMAGE'|'DOCUMENT'|'PDF'|'SPREADSHEET'|'PRESENTATION'|'AUDIO'|'VIDEO'|'SOURCE_CODE'|'OTHER'>|null,
     *     ResourceTypes?: list<'FOLDER'|'DOCUMENT'|'COMMENT'|'DOCUMENT_VERSION'>|null,
     *     Labels?: list<string>|null,
     *     Principals?: list<SearchPrincipalType>|null,
     *     AncestorIds?: list<string>|null,
     *     SearchCollectionTypes?: list<'OWNED'|'SHARED_WITH_ME'>|null,
     *     SizeRange?: LongRangeType|null,
     *     CreatedRange?: DateRangeType|null,
     *     ModifiedRange?: DateRangeType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
