<?php

namespace Sunaoka\Aws\Structures\Sns\CreateSMSSandboxPhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumber
 * @property 'en-US'|'en-GB'|'es-419'|'es-ES'|'de-DE'|'fr-CA'|'fr-FR'|'it-IT'|'ja-JP'|'pt-BR'|'kr-KR'|'zh-CN'|'zh-TW' $LanguageCode
 */
class CreateSMSSandboxPhoneNumberRequest extends Request
{
    /**
     * @param array{
     *     PhoneNumber: string,
     *     LanguageCode?: 'en-US'|'en-GB'|'es-419'|'es-ES'|'de-DE'|'fr-CA'|'fr-FR'|'it-IT'|'ja-JP'|'pt-BR'|'kr-KR'|'zh-CN'|'zh-TW'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
