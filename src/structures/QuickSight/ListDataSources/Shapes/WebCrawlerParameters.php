<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_AUTH'|'BASIC_AUTH'|'FORM'|'SAML' $WebCrawlerAuthType
 * @property string|null $UsernameFieldXpath
 * @property string|null $PasswordFieldXpath
 * @property string|null $UsernameButtonXpath
 * @property string|null $PasswordButtonXpath
 * @property string|null $LoginPageUrl
 * @property string|null $WebProxyHostName
 * @property int<0, 65535>|null $WebProxyPortNumber
 */
class WebCrawlerParameters extends Shape
{
    /**
     * @param array{
     *     WebCrawlerAuthType: 'NO_AUTH'|'BASIC_AUTH'|'FORM'|'SAML',
     *     UsernameFieldXpath?: string|null,
     *     PasswordFieldXpath?: string|null,
     *     UsernameButtonXpath?: string|null,
     *     PasswordButtonXpath?: string|null,
     *     LoginPageUrl?: string|null,
     *     WebProxyHostName?: string|null,
     *     WebProxyPortNumber?: int<0, 65535>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
