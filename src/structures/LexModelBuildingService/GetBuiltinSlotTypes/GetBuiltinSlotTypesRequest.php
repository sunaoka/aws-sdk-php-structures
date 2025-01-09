<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBuiltinSlotTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'de-DE'|'en-AU'|'en-GB'|'en-IN'|'en-US'|'es-419'|'es-ES'|'es-US'|'fr-FR'|'fr-CA'|'it-IT'|'ja-JP'|'ko-KR' $locale
 * @property string $signatureContains
 * @property string $nextToken
 * @property int $maxResults
 */
class GetBuiltinSlotTypesRequest extends Request
{
    /**
     * @param array{
     *     locale?: 'de-DE'|'en-AU'|'en-GB'|'en-IN'|'en-US'|'es-419'|'es-ES'|'es-US'|'fr-FR'|'fr-CA'|'it-IT'|'ja-JP'|'ko-KR',
     *     signatureContains?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
