<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CanadaAdditionalInfo $canadaAdditionalInfo
 * @property EstoniaAdditionalInfo $estoniaAdditionalInfo
 * @property GeorgiaAdditionalInfo $georgiaAdditionalInfo
 * @property IsraelAdditionalInfo $israelAdditionalInfo
 * @property ItalyAdditionalInfo $italyAdditionalInfo
 * @property KenyaAdditionalInfo $kenyaAdditionalInfo
 * @property MalaysiaAdditionalInfo $malaysiaAdditionalInfo
 * @property PolandAdditionalInfo $polandAdditionalInfo
 * @property RomaniaAdditionalInfo $romaniaAdditionalInfo
 * @property SaudiArabiaAdditionalInfo $saudiArabiaAdditionalInfo
 * @property SouthKoreaAdditionalInfo $southKoreaAdditionalInfo
 * @property SpainAdditionalInfo $spainAdditionalInfo
 * @property TurkeyAdditionalInfo $turkeyAdditionalInfo
 * @property UkraineAdditionalInfo $ukraineAdditionalInfo
 */
class AdditionalInfoRequest extends Shape
{
    /**
     * @param array{
     *     canadaAdditionalInfo?: CanadaAdditionalInfo,
     *     estoniaAdditionalInfo?: EstoniaAdditionalInfo,
     *     georgiaAdditionalInfo?: GeorgiaAdditionalInfo,
     *     israelAdditionalInfo?: IsraelAdditionalInfo,
     *     italyAdditionalInfo?: ItalyAdditionalInfo,
     *     kenyaAdditionalInfo?: KenyaAdditionalInfo,
     *     malaysiaAdditionalInfo?: MalaysiaAdditionalInfo,
     *     polandAdditionalInfo?: PolandAdditionalInfo,
     *     romaniaAdditionalInfo?: RomaniaAdditionalInfo,
     *     saudiArabiaAdditionalInfo?: SaudiArabiaAdditionalInfo,
     *     southKoreaAdditionalInfo?: SouthKoreaAdditionalInfo,
     *     spainAdditionalInfo?: SpainAdditionalInfo,
     *     turkeyAdditionalInfo?: TurkeyAdditionalInfo,
     *     ukraineAdditionalInfo?: UkraineAdditionalInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
