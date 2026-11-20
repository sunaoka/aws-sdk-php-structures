<?php

namespace Sunaoka\Aws\Structures\Polly\CreateVoice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'de-DE'|'en-US'|'es-US'|'fr-FR'|'hi-IN'|'it-IT'|'pt-BR' $LanguageCode
 * @property bool $TermsAccepted
 * @property Shapes\VoiceCreationData $VoiceCreationData
 * @property Shapes\CustomerManagedEncryption|null $CustomerManagedEncryption
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 */
class CreateVoiceRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     LanguageCode: 'de-DE'|'en-US'|'es-US'|'fr-FR'|'hi-IN'|'it-IT'|'pt-BR',
     *     TermsAccepted: bool,
     *     VoiceCreationData: Shapes\VoiceCreationData,
     *     CustomerManagedEncryption?: Shapes\CustomerManagedEncryption|null,
     *     Tags?: array<string, string>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
