<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartImport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $importId
 * @property Shapes\ImportResourceSpecification $resourceSpecification
 * @property 'Overwrite'|'FailOnConflict'|'Append' $mergeStrategy
 * @property string $filePassword
 */
class StartImportRequest extends Request
{
    /**
     * @param array{
     *     importId: string,
     *     resourceSpecification: Shapes\ImportResourceSpecification,
     *     mergeStrategy: 'Overwrite'|'FailOnConflict'|'Append',
     *     filePassword?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
