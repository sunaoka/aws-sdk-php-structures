<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MalaysiaAdditionalInfo|null $malaysiaAdditionalInfo
 * @property IsraelAdditionalInfo|null $israelAdditionalInfo
 * @property EstoniaAdditionalInfo|null $estoniaAdditionalInfo
 * @property CanadaAdditionalInfo|null $canadaAdditionalInfo
 * @property SpainAdditionalInfo|null $spainAdditionalInfo
 * @property KenyaAdditionalInfo|null $kenyaAdditionalInfo
 * @property SouthKoreaAdditionalInfo|null $southKoreaAdditionalInfo
 * @property TurkeyAdditionalInfo|null $turkeyAdditionalInfo
 * @property GeorgiaAdditionalInfo|null $georgiaAdditionalInfo
 * @property ItalyAdditionalInfo|null $italyAdditionalInfo
 * @property RomaniaAdditionalInfo|null $romaniaAdditionalInfo
 * @property UkraineAdditionalInfo|null $ukraineAdditionalInfo
 * @property PolandAdditionalInfo|null $polandAdditionalInfo
 * @property SaudiArabiaAdditionalInfo|null $saudiArabiaAdditionalInfo
 * @property IndonesiaAdditionalInfo|null $indonesiaAdditionalInfo
 * @property VietnamAdditionalInfo|null $vietnamAdditionalInfo
 * @property EgyptAdditionalInfo|null $egyptAdditionalInfo
 * @property GreeceAdditionalInfo|null $greeceAdditionalInfo
 * @property UzbekistanAdditionalInfo|null $uzbekistanAdditionalInfo
 * @property PhilippinesAdditionalInfo|null $philippinesAdditionalInfo
 * @property BelgiumAdditionalInfo|null $belgiumAdditionalInfo
 * @property ChileAdditionalInfo|null $chileAdditionalInfo
 * @property FranceAdditionalInfo|null $franceAdditionalInfo
 */
class AdditionalInfoRequest extends Shape
{
    /**
     * @param array{
     *     malaysiaAdditionalInfo?: MalaysiaAdditionalInfo|null,
     *     israelAdditionalInfo?: IsraelAdditionalInfo|null,
     *     estoniaAdditionalInfo?: EstoniaAdditionalInfo|null,
     *     canadaAdditionalInfo?: CanadaAdditionalInfo|null,
     *     spainAdditionalInfo?: SpainAdditionalInfo|null,
     *     kenyaAdditionalInfo?: KenyaAdditionalInfo|null,
     *     southKoreaAdditionalInfo?: SouthKoreaAdditionalInfo|null,
     *     turkeyAdditionalInfo?: TurkeyAdditionalInfo|null,
     *     georgiaAdditionalInfo?: GeorgiaAdditionalInfo|null,
     *     italyAdditionalInfo?: ItalyAdditionalInfo|null,
     *     romaniaAdditionalInfo?: RomaniaAdditionalInfo|null,
     *     ukraineAdditionalInfo?: UkraineAdditionalInfo|null,
     *     polandAdditionalInfo?: PolandAdditionalInfo|null,
     *     saudiArabiaAdditionalInfo?: SaudiArabiaAdditionalInfo|null,
     *     indonesiaAdditionalInfo?: IndonesiaAdditionalInfo|null,
     *     vietnamAdditionalInfo?: VietnamAdditionalInfo|null,
     *     egyptAdditionalInfo?: EgyptAdditionalInfo|null,
     *     greeceAdditionalInfo?: GreeceAdditionalInfo|null,
     *     uzbekistanAdditionalInfo?: UzbekistanAdditionalInfo|null,
     *     philippinesAdditionalInfo?: PhilippinesAdditionalInfo|null,
     *     belgiumAdditionalInfo?: BelgiumAdditionalInfo|null,
     *     chileAdditionalInfo?: ChileAdditionalInfo|null,
     *     franceAdditionalInfo?: FranceAdditionalInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
