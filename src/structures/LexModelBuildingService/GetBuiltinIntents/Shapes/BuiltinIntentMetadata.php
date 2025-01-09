<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBuiltinIntents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $signature
 * @property list<'de-DE'|'en-AU'|'en-GB'|'en-IN'|'en-US'|'es-419'|'es-ES'|'es-US'|'fr-FR'|'fr-CA'|'it-IT'|'ja-JP'|'ko-KR'> $supportedLocales
 */
class BuiltinIntentMetadata extends Shape
{
    /**
     * @param array{
     *     signature?: string,
     *     supportedLocales?: list<'de-DE'|'en-AU'|'en-GB'|'en-IN'|'en-US'|'es-419'|'es-ES'|'es-US'|'fr-FR'|'fr-CA'|'it-IT'|'ja-JP'|'ko-KR'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
