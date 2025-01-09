<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListMedicalVocabularies;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PENDING'|'READY'|'FAILED' $Status
 * @property string $NextToken
 * @property list<Shapes\VocabularyInfo> $Vocabularies
 */
class ListMedicalVocabulariesResponse extends Response
{
}
