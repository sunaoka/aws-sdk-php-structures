<?php

namespace Sunaoka\Aws\Structures\Connect\CreateVocabulary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $VocabularyArn
 * @property string $VocabularyId
 * @property 'CREATION_IN_PROGRESS'|'ACTIVE'|'CREATION_FAILED'|'DELETE_IN_PROGRESS' $State
 */
class CreateVocabularyResponse extends Response
{
}
