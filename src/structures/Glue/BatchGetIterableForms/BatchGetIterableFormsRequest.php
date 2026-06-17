<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetIterableForms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssetIdentifier
 * @property string $IterableFormName
 * @property list<string> $ItemIdentifiers
 */
class BatchGetIterableFormsRequest extends Request
{
    /**
     * @param array{
     *     AssetIdentifier: string,
     *     IterableFormName: string,
     *     ItemIdentifiers: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
