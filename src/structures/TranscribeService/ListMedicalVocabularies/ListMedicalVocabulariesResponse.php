<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListMedicalVocabularies;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PENDING'|'READY'|'FAILED'|null $Status
 * @property string|null $NextToken
 * @property list<Shapes\VocabularyInfo>|null $Vocabularies
 */
class ListMedicalVocabulariesResponse extends Response
{
}
