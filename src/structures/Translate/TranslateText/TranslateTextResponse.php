<?php

namespace Sunaoka\Aws\Structures\Translate\TranslateText;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TranslatedText
 * @property string $SourceLanguageCode
 * @property string $TargetLanguageCode
 * @property list<Shapes\AppliedTerminology> $AppliedTerminologies
 * @property Shapes\TranslationSettings $AppliedSettings
 */
class TranslateTextResponse extends Response
{
}
