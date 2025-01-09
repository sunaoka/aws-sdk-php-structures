<?php

namespace Sunaoka\Aws\Structures\TranscribeService\UpdateVocabularyFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VocabularyFilterName
 * @property list<string> $Words
 * @property string $VocabularyFilterFileUri
 * @property string $DataAccessRoleArn
 */
class UpdateVocabularyFilterRequest extends Request
{
    /**
     * @param array{
     *     VocabularyFilterName: string,
     *     Words?: list<string>,
     *     VocabularyFilterFileUri?: string,
     *     DataAccessRoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
