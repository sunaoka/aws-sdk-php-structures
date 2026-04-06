<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\CreateWhatsAppMessageTemplateFromLibrary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $addContactNumber
 * @property bool|null $addLearnMoreLink
 * @property bool|null $addSecurityRecommendation
 * @property bool|null $addTrackPackageLink
 * @property int|null $codeExpirationMinutes
 */
class LibraryTemplateBodyInputs extends Shape
{
    /**
     * @param array{
     *     addContactNumber?: bool|null,
     *     addLearnMoreLink?: bool|null,
     *     addSecurityRecommendation?: bool|null,
     *     addTrackPackageLink?: bool|null,
     *     codeExpirationMinutes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
