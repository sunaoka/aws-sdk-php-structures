<?php

namespace Sunaoka\Aws\Structures\TranscribeService\UpdateVocabularyFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VocabularyFilterName
 * @property list<string>|null $Words
 * @property string|null $VocabularyFilterFileUri
 * @property string|null $DataAccessRoleArn
 */
class UpdateVocabularyFilterRequest extends Request
{
    /**
     * @param array{
     *     VocabularyFilterName: string,
     *     Words?: list<string>|null,
     *     VocabularyFilterFileUri?: string|null,
     *     DataAccessRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
