<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BrazilAdditionalInfo $brazilAdditionalInfo
 * @property CanadaAdditionalInfo $canadaAdditionalInfo
 * @property EstoniaAdditionalInfo $estoniaAdditionalInfo
 * @property GeorgiaAdditionalInfo $georgiaAdditionalInfo
 * @property IndiaAdditionalInfo $indiaAdditionalInfo
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
class AdditionalInfoResponse extends Shape
{
    /**
     * @param array{
     *     brazilAdditionalInfo?: BrazilAdditionalInfo,
     *     canadaAdditionalInfo?: CanadaAdditionalInfo,
     *     estoniaAdditionalInfo?: EstoniaAdditionalInfo,
     *     georgiaAdditionalInfo?: GeorgiaAdditionalInfo,
     *     indiaAdditionalInfo?: IndiaAdditionalInfo,
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
