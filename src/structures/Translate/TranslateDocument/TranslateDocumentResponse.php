<?php

namespace Sunaoka\Aws\Structures\Translate\TranslateDocument;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\TranslatedDocument $TranslatedDocument
 * @property string $SourceLanguageCode
 * @property string $TargetLanguageCode
 * @property list<Shapes\AppliedTerminology> $AppliedTerminologies
 * @property Shapes\TranslationSettings $AppliedSettings
 */
class TranslateDocumentResponse extends Response
{
}
