<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListSkillsStoreSkillsByCategory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProductDescription
 * @property string|null $InvocationPhrase
 * @property string|null $ReleaseDate
 * @property string|null $EndUserLicenseAgreement
 * @property list<string>|null $GenericKeywords
 * @property list<string>|null $BulletPoints
 * @property list<string>|null $NewInThisVersionBulletPoints
 * @property list<string>|null $SkillTypes
 * @property array<string, string>|null $Reviews
 * @property DeveloperInfo|null $DeveloperInfo
 */
class SkillDetails extends Shape
{
    /**
     * @param array{
     *     ProductDescription?: string|null,
     *     InvocationPhrase?: string|null,
     *     ReleaseDate?: string|null,
     *     EndUserLicenseAgreement?: string|null,
     *     GenericKeywords?: list<string>|null,
     *     BulletPoints?: list<string>|null,
     *     NewInThisVersionBulletPoints?: list<string>|null,
     *     SkillTypes?: list<string>|null,
     *     Reviews?: array<string, string>|null,
     *     DeveloperInfo?: DeveloperInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
