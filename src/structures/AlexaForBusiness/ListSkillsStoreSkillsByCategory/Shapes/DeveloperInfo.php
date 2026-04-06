<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListSkillsStoreSkillsByCategory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeveloperName
 * @property string|null $PrivacyPolicy
 * @property string|null $Email
 * @property string|null $Url
 */
class DeveloperInfo extends Shape
{
    /**
     * @param array{
     *     DeveloperName?: string|null,
     *     PrivacyPolicy?: string|null,
     *     Email?: string|null,
     *     Url?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
