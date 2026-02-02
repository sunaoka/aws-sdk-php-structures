<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetUserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $browserTabTitle
 * @property string $welcomeText
 * @property string|null $loginTitle
 * @property string|null $loginDescription
 * @property string|null $loginButtonText
 * @property string|null $contactLink
 * @property string|null $contactButtonText
 * @property string|null $loadingText
 */
class LocalizedBrandingStrings extends Shape
{
    /**
     * @param array{
     *     browserTabTitle: string,
     *     welcomeText: string,
     *     loginTitle?: string|null,
     *     loginDescription?: string|null,
     *     loginButtonText?: string|null,
     *     contactLink?: string|null,
     *     contactButtonText?: string|null,
     *     loadingText?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
