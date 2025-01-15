<?php

namespace Sunaoka\Aws\Structures\Translate\ImportTerminology;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'OVERWRITE' $MergeStrategy
 * @property string|null $Description
 * @property Shapes\TerminologyData $TerminologyData
 * @property Shapes\EncryptionKey|null $EncryptionKey
 * @property list<Shapes\Tag>|null $Tags
 */
class ImportTerminologyRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     MergeStrategy: 'OVERWRITE',
     *     Description?: string|null,
     *     TerminologyData: Shapes\TerminologyData,
     *     EncryptionKey?: Shapes\EncryptionKey|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
