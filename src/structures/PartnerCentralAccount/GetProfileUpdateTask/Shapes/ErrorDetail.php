<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\GetProfileUpdateTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Locale
 * @property string $Message
 * @property 'INVALID_CONTENT'|'DUPLICATE_PROFILE'|'INVALID_LOGO'|'INVALID_LOGO_URL'|'INVALID_LOGO_FILE'|'INVALID_LOGO_SIZE'|'INVALID_WEBSITE_URL' $Reason
 */
class ErrorDetail extends Shape
{
    /**
     * @param array{
     *     Locale: string,
     *     Message: string,
     *     Reason: 'INVALID_CONTENT'|'DUPLICATE_PROFILE'|'INVALID_LOGO'|'INVALID_LOGO_URL'|'INVALID_LOGO_FILE'|'INVALID_LOGO_SIZE'|'INVALID_WEBSITE_URL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
