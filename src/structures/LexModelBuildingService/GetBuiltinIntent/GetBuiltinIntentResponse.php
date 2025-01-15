<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBuiltinIntent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $signature
 * @property list<'de-DE'|'en-AU'|'en-GB'|'en-IN'|'en-US'|'es-419'|'es-ES'|'es-US'|'fr-FR'|'fr-CA'|'it-IT'|'ja-JP'|'ko-KR'>|null $supportedLocales
 * @property list<Shapes\BuiltinIntentSlot>|null $slots
 */
class GetBuiltinIntentResponse extends Response
{
}
