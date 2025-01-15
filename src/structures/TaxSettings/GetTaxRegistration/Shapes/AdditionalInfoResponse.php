<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BrazilAdditionalInfo|null $brazilAdditionalInfo
 * @property CanadaAdditionalInfo|null $canadaAdditionalInfo
 * @property EstoniaAdditionalInfo|null $estoniaAdditionalInfo
 * @property GeorgiaAdditionalInfo|null $georgiaAdditionalInfo
 * @property IndiaAdditionalInfo|null $indiaAdditionalInfo
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
class AdditionalInfoResponse extends Shape
{
    /**
     * @param array{
     *     brazilAdditionalInfo?: BrazilAdditionalInfo|null,
     *     canadaAdditionalInfo?: CanadaAdditionalInfo|null,
     *     estoniaAdditionalInfo?: EstoniaAdditionalInfo|null,
     *     georgiaAdditionalInfo?: GeorgiaAdditionalInfo|null,
     *     indiaAdditionalInfo?: IndiaAdditionalInfo|null,
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
