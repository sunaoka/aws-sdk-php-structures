<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBuiltinIntents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'de-DE'|'en-AU'|'en-GB'|'en-IN'|'en-US'|'es-419'|'es-ES'|'es-US'|'fr-FR'|'fr-CA'|'it-IT'|'ja-JP'|'ko-KR'|null $locale
 * @property string|null $signatureContains
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 */
class GetBuiltinIntentsRequest extends Request
{
    /**
     * @param array{
     *     locale?: 'de-DE'|'en-AU'|'en-GB'|'en-IN'|'en-US'|'es-419'|'es-ES'|'es-US'|'fr-FR'|'fr-CA'|'it-IT'|'ja-JP'|'ko-KR'|null,
     *     signatureContains?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
