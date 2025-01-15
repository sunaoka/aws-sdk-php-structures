<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBuiltinSlotTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $signature
 * @property list<'de-DE'|'en-AU'|'en-GB'|'en-IN'|'en-US'|'es-419'|'es-ES'|'es-US'|'fr-FR'|'fr-CA'|'it-IT'|'ja-JP'|'ko-KR'>|null $supportedLocales
 */
class BuiltinSlotTypeMetadata extends Shape
{
    /**
     * @param array{
     *     signature?: string|null,
     *     supportedLocales?: list<'de-DE'|'en-AU'|'en-GB'|'en-IN'|'en-US'|'es-419'|'es-ES'|'es-US'|'fr-FR'|'fr-CA'|'it-IT'|'ja-JP'|'ko-KR'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
