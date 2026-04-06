<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CanadaAdditionalInfo|null $canadaAdditionalInfo
 * @property EstoniaAdditionalInfo|null $estoniaAdditionalInfo
 * @property GeorgiaAdditionalInfo|null $georgiaAdditionalInfo
 * @property IsraelAdditionalInfo|null $israelAdditionalInfo
 * @property ItalyAdditionalInfo|null $italyAdditionalInfo
 * @property KenyaAdditionalInfo|null $kenyaAdditionalInfo
 * @property MalaysiaAdditionalInfo|null $malaysiaAdditionalInfo
 * @property PolandAdditionalInfo|null $polandAdditionalInfo
 * @property RomaniaAdditionalInfo|null $romaniaAdditionalInfo
 * @property SaudiArabiaAdditionalInfo|null $saudiArabiaAdditionalInfo
 * @property SouthKoreaAdditionalInfo|null $southKoreaAdditionalInfo
 * @property SpainAdditionalInfo|null $spainAdditionalInfo
 * @property TurkeyAdditionalInfo|null $turkeyAdditionalInfo
 * @property UkraineAdditionalInfo|null $ukraineAdditionalInfo
 */
class AdditionalInfoRequest extends Shape
{
    /**
     * @param array{
     *     canadaAdditionalInfo?: CanadaAdditionalInfo|null,
     *     estoniaAdditionalInfo?: EstoniaAdditionalInfo|null,
     *     georgiaAdditionalInfo?: GeorgiaAdditionalInfo|null,
     *     israelAdditionalInfo?: IsraelAdditionalInfo|null,
     *     italyAdditionalInfo?: ItalyAdditionalInfo|null,
     *     kenyaAdditionalInfo?: KenyaAdditionalInfo|null,
     *     malaysiaAdditionalInfo?: MalaysiaAdditionalInfo|null,
     *     polandAdditionalInfo?: PolandAdditionalInfo|null,
     *     romaniaAdditionalInfo?: RomaniaAdditionalInfo|null,
     *     saudiArabiaAdditionalInfo?: SaudiArabiaAdditionalInfo|null,
     *     southKoreaAdditionalInfo?: SouthKoreaAdditionalInfo|null,
     *     spainAdditionalInfo?: SpainAdditionalInfo|null,
     *     turkeyAdditionalInfo?: TurkeyAdditionalInfo|null,
     *     ukraineAdditionalInfo?: UkraineAdditionalInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
